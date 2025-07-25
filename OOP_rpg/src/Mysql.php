<?php

namespace Game;

use Exception;
use PDO;
use PDOException;

class Mysql implements Database
{
    private PDO $connection;

    /**
     * @param string $host
     * @param string $database
     * @param string $user
     * @param string $password
     */
    public function __construct(string $host, string $database, string $user, string $password)
    {
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch(PDOException $error) {
            throw new PDOException($error->getMessage());
        }
    }

    /**
     *  INSERT INTO tablename SET kolom1=waarde1, kolom2=waarde2
     *  INSERT INTO tablename (kolom1, kolom2, kolom3) VALUES (waarde1, waarde2, waarde3)
     *   $table = user, data = ['username' => $username, 'password' => $password]
     *  SQL = INSERT INTO user (username, password) values (':username', ':password')
     *  bindValue(':username', $username);
     *  return id van rij die geinsert is
     * @param string $table
     * @param string[] $data
     * @return int
     * @throws Exception
     */
    public function insert(string $table, array $data): int
    {
        try {
            // TODO: Implement insert() method.
            $columns = array_keys($data); // ['username', 'password'] => username, password
            $placeholders = ':' . implode(', :', $columns); // :username, :password, :email, :phoneNr
            $colomnList = implode(', ', $columns); // username, password, email, phoneNr
            // opbouwen query
            $sql = "INSERT INTO {$table} ({$colomnList}) VALUES  ({$placeholders})";
            $statement = $this->connection->prepare($sql);
            // data koppelen aan PDO variabelen (bijv :username)
            foreach ($data as $key => $value) {
                $statement->bindValue(':' . $key, $value);  // :username, $username
            }
            // uitvoeren query
            $statement->execute();
            // de id opvragen, zodat we het object kunnen updaten welk id hij heeft gekregen in de db
            return $this->connection->lastInsertId();
        } catch(PDOException $error) {
            throw new PDOException("Insert failed:". $error->getMessage());
        }
    }

    /**
     * UPDATE user SET username=:username, password=:password WHERE id=5
     * return hoeveel rijen geupdate zijn
     * @param string $table
     * @param string[] $data
     * @param string[] $conditions
     * @return int
     * @throws Exception
     */
    public function update(string $table, array $data, array $conditions): int
    {
        // TODO: Implement update() method.
        // UPDATE tabel SET kolom1=:kolom1, kolom=value WHERE id=5
        try{
            if(!isset($conditions['id']))
            {
                throw new Exception("Id is required for update");
            }

            $setClause = [];
            foreach($data as $column => $value) {
                $setClause[] = "{$column} = :{$column}";
            }
            $setClauseString = implode(', ', $setClause);
            $sql = "UPDATE {$table} SET {$setClauseString} WHERE id = :id";
            $statement = $this->connection->prepare($sql);
            foreach ($data as $column => $value) {
                $statement->bindValue(":$column", $value);
            }
            $statement->bindValue(":id", $conditions['id']);
            $statement->execute();
            return $statement->rowCount();
        }catch(PDOException $error){
            throw new PDOException("Update failed:".$error->getMessage());
        }
    }

    /**
     *  DELETE FROM user WHERE id=:id
     *  return hoeveel rijen verwijderd zijn
     * @param string $table
     * @param string[] $conditions
     * @return int
     * @throws Exception
     */
    public function delete(string $table, array $conditions): int
    {
        try {
            if (!isset($conditions['id']))
            {
                throw new Exception("No conditions provided");
            }
            $sql = "DELETE FROM {$table} WHERE id = :id";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':id', $conditions['id']);
            $statement->execute();
            return $statement->rowCount();
        }catch(PDOException $error){
            throw new PDOException("Delete failed". $error->getMessage());
        }
    }

    /**
     *  SELECT kolom1, kolom2 FROM tablename
     *  SELECT kolom1, kolom2 FROM tablename, tablename2
     *  SELECT user.name, schoolclass.name FROM user, schoolclass WHERE user.schoolclassid = schoolclass.id
     *  SELECT user.name FROM user WHERE schoolclass.name LIKE '_M%'
     *  SELECT user.name FROM user WHERE id=5
     *  SELECT order.date FROM order WHERE order.date BETWEEN 10-5-2002 AND 15-5-2003
     *
     *  $tableColumns = ['user' => [name, email] *
     *           'order'=> [ id, date]
     *  ]
     *  $conditions = [
     *      user.id = 5,
     *      order.name LIKE '%O%'
     *  ]
     * @param string[][] $tableColumns
     * @param string[] $conditions
     * @return array
     * @throws Exception
     */
    public function select(array $tableColumns, array $conditions = []): array
    {
        try {

            // TODO: Implement select() method.
            $columns = [];
            foreach ($tableColumns as $table => $cols) {
                foreach ($cols as $col) {
                    if ($col === '*') {
                        $columns[] = "{$table}.*"; // user.*
                    } else {
                        $columns[] = "{$table}.{$col}"; // user.name of user.email
                    }
                }
            }
            /*
             * $columns = ['user.name', 'user.email', 'order.*']
             */

            $select = implode(', ', $columns);  // user.*, order.date
            $tables = array_keys($tableColumns); // [user, order]
            $from = implode(', ', $tables); // user, order

            $query = "SELECT {$select} FROM {$from}"; // SELECT user.*, order.date FROM user, order

            $whereConditions = [];
            $parameters = [];
            $paramCount = 0;
            if(!empty($conditions)) {
                foreach ($conditions as $key => $value) {
                    $paramName = "param".$paramCount++;

                    if(str_contains($key, ' LIKE')) // ['user.username LIKE' => $var]
                    {
                        $columnName = str_replace(' LIKE', '', $key); // user.username
                        $whereConditions[] = "{$columnName} LIKE :{$paramName}"; // user.username LIKE :param1
                        $parameters[$paramName] = "%{$value}%";// $paraments['param1'] = $value
                    }elseif(str_contains($key, ' BETWEEN'))
                    {
                        $columnName = str_replace(' BETWEEN', '', $key); // order.date
                        if(is_array($value) && count($value) === 2) {
                            $whereConditions[] = "$columnName BETWEEN :param{$paramCount} AND :param".$paramCount+1;
                            $parameters['param'.$paramCount++] = $value[0];
                            $parameters['param'.$paramCount] = $value[1];
                        }
                        // (>, <, >=, <=, !=)
                    }elseif(preg_match('/\s+[<>=!]+$/', $key)) // ['item.value >' =>  10]
                    {
                        $parts = preg_split('/\s+/', trim($key), 2); //['item.value', >]
                        $columnName = $parts[0];
                        $operator = $parts[1];
                        $whereConditions[] = "{$columnName} {$operator} :{$paramName}";
                        $parameters[$paramName] = $value;
                    }elseif(str_contains($key, '.') && str_contains($value, '.'))
                    {
                       // [user.id => order.userid]
                        $whereConditions[] = "$key = $value";
                    }else{
                        $whereConditions[] = "$key = :$paramName";
                        $parameters[$paramName] = $value;
                    }
                }
                if(!empty($whereConditions)) {
                    $query .= " WHERE ".implode(' AND ', $whereConditions);
                }
            }
            $statement = $this->connection->prepare($query);
            foreach($parameters as $name => $value) {
                $statement->bindValue(":$name", $value); // WHERE user.username LIKE %bla%
            }


            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC); //['name' => value]
        }catch(PDOException $error){
            throw new PDOException("Error bij select query: ".$error->getMessage());
        }
    }

    /**
     * @return bool
     */
    public function testConnection(): bool
    {
        // TODO: Implement testConnection() method.
        try {
            $test = $this->connection->query("SELECT 1");
            return $test !== false;
        }catch(PDOException $error){
            return false;
        }
    }


}