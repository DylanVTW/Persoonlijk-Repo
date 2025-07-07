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

        } catch (PDOException $error) {
            throw new PDOexception($error->getMessage());
        }
    }

    /**
     * INSERT into tablename SET kolom1=waarde1, kolom2=waarde2
     * INSERT into tablename(kolom1, kolom2, kolom3) VALUES (waarde1, waarde2, waarde3)
     * $table = user, data [':username', ':password']
     * bindValue(':username', $username) 
     * 
     *  */

    /**
     * Summary of select
     * @param string $table
     * @param string[] $data
     * @return int
     */
    public function insert(string $table, array $data): int
    {
        try {
            $columns = array_keys($data);
            $placeholders = ':' . implode(', :', $columns); // :username, :password, :email, :phomenumber
            $columnList = implode(', ', $columns); // username, password, email, phonenumber
            $sql = "INSERT INTO ($table)_($columnList) VALUES ($placeholders)";
            $statement = $this->connection->prepare($sql);

            foreach ($data as $key => $value) {
                $statement->bindValue(':' . $key, $value);
            }
            $statement->execute();
            return $this->connection->lastInsertId();
        } catch (PDOException $error) {
            throw new PDOException($error->getMessage());
        }
    }
    /**
     * 
     * UPDATE user SET username=:username, password=:password WHERE id=5
     */
    /**
     * Summary of select
     * @param string $table
     * @param string[] $data
     * @param string[] $conditions
     * @return int
     */
    public function update(string $table, array $data, array $conditions)
    {
       try{
        if(empty($conditions)){
            throw new Exception("Conditions cannot be empty");
        }
        $setClause = [];
        foreach($data as $column => $value){
            $setClause = "{$column} = :{$column}";
        }
        $setClauseString = implode(', ', $setClause);
        $sql = "UPDATE {$table} SET {$setClauseString} WHERE {$whereClause}";
        $statement = $this->connection->prepare($sql);

        foreach($data as $column => $value){
            $statement->bindValue(":$column", $value);
        }
        $statement->bindValue("id", $conditions[0]);
        $statement->execute();
        return $statement->rowCount();
       } catch(PDOException $error){
        throw new PDOException("Update failed" . $error->getMessage());
       }
    }

    /**
     * 
     * DELETE FROM user WHERE id=:id
     */
    /**
     * Summary of select
     * @param string $table
     * @param string[] $conditions
     * @return int
     */
    public function delete()
    {
        try{
            if(isset($conditions['id'])){
                throw new Exception("Conditions cannot be empty");
            }
            $sql = "DELETE FROM {$table} WHERE id = :id";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(':id', $conditions['id']);
            $statement->execute();
            return $statement->rowCount(); 
        }catch(PDOException $error){
            throw new PDOException("Delete failed" . $error->getMessage());
        }
    }

    /**
     * 
     * SELECT kolom1, kolom2 FROM tablename
     * SELECT user.name, schoolclass.name FROM user, schoolclass WHERE user.schoolclassid = schoolclass.id
     * SELECT user.name FROM user WHERE schoolclass.name LIKE '%%'
     * SELECT user.name FREOM user WHERE id=5
     * SELECT oder.date FROM order WHERE order.date BETWEEN '10-5-2022' AND '15-15-2023'
     * 
     * data = ['user' => [name, email]
     * 'ordewr'=> [id, date]
     * ]
     * $conditions = [
     * user.id = 5,
     * order.name LIKE '%0%'\
     * ]
     */

    /**
     * Summary of select
     * @param string[][] $tableColums
     * @param string[] $conditions
     * @return int
     */
    public function select(array $tableColumns, array $conditions = []): array
    {
        try {


            $colums = [];
            foreach ($tableColumns as $table => $cols) {
                foreach ($cols as $col) {
                    if ($col === '*') {
                        $colums[] = "($table).*";
                    } else {
                        $colums[] = "($table).{$col}";
                    }
                }
            }
            $select = implode(', ', $colums);
            $tables = array_keys($tableColumns);
            $from = implode(', ', $tables);

            $query = "SELECT($select) FROM ($from)";

            $whereConditions = [];
            $parameters = [];
            $paramCount = 0;
            if(!empty($conditions)) {
                foreach ($conditions as $key => $value) {
                    $paramName == "param".$paramCount++;
                    if(str_contains($key, 'LIKE')!== false)  //['user.username LIKE' => $var]                  $parameters[] = ":param{$paramCount}";
                    {
                        $columnName = str_replace('LIKE', '', $key);
                        $whereConditions[] = "{$columnName} LIKE :{$paramName}";
                        $parameters[$paramName] = "%{$value}%"; // Voeg % toe voor LIKE
                    }elseif(str_contains($key, 'BETWEEN') !== falses){
                        $columnName = str_replace('BETWEEN', '', $key);
                        if(is_array($vale) && count($value) === 2){
                            $whereConditions[] = "$columnName BETWEEN :param{$paramCount} AND :param" .$paramCount+1;
                            $parameters['param'.$paramCount++] = $value[0];
                            $parameters['param'.$paramCount] = $value[1]; 
                        }
                    }elseif(preg_match('/\s+[<>=!]+$/',))
                    {
                        $parts = preg_split('/\s+', trim($key), 2);
                        $columnName = $parts[0];
                        $operator = $parts[1];
                        $whereConditions[] = "{$columnName}, {$operator} :{$paramName}";
                        $parameters[$paramName] = $value;
                    }elseif(str_contains($key, '.') && str_contains($value, '.')){
                        $whereConditions[] = "$key = $paramName";
                    }else{
                        $whereConditions[] = "$key = :{$paramName}";
                        $parameters[$paramName] = $value;
                    }

             
                }
                       if(!empty($whereConditions)){
                        $query .= "WHERE" . implode(' AND ', $whereConditions);
                    }
            }

            $statement = $this->connection->prepare($query);
             foreach($parameters as $name => $value){
        $statement->bindValue(":$name", $value);
    }
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOexception $error) {
            throw new PDOException("Error in select query" . $error->getMessage());
        }
    }


   



    /**
     * Summary of testConnection
     * @return bool
     */
    public function testConnection(): bool
    {
        try {
            $test = $this->connection->query('SELECT 1');
            return $test !== false;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }




}
