<?php

namespace Game;

interface Database
{
    public function __construct(string $host, string $database, string $user, string $password);

        /**
     * INSERT into tablename SET kolom1=waarde1, kolom2=waarde2
     * INSERT into tablename(kolom1, kolom2, kolom3) VALUES (waarde1, waarde2, waarde3)
     * $table = user, data ['username', 'password'] 
     * 
     *  */

     /**
     * Summary of select
     * @param string $table
     * @param string[] $data
     * @return int
     */
    public function insert(string $table, array $data);

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
    public function update(string $table, array $data, array $conditions);

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
    public function delete();

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
    public function select(array $tableColums, array $conditions): array;



    /**
     * Summary of testConnection
     * @return bool
     */
    public function testConnection(): bool;




    
}