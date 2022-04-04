<?php 

namespace app\db;

use PDO; 
use PDOException;    

class Database
{
    const HOST = 'localhost';

    const NAME = 'projetobd';

    const USER = 'root'; 

    const PASS = '';

    private $table;   

    private $connection;

    public function setConnection() {
        try {
            $this -> connection = new PDO('mysql=host' . self::HOST . self::NAME . self::USER . self::PASS);
            $this -> connection -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            die('Fatal Error' . $e -> getmessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $statement = $this -> connection -> prepare($query);
            $statement -> execute($params);
            return $statement;
        }
        catch (PDOException $erro){
            die ('Fatal Error' . $erro -> getmessage());
        }
    }

    public function insert ($values)
    {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '');

        $query = 'INSERT INTO' . $this -> table . ' ( ' . implode (',', $values) . ' ) VALUES ( ' . implode (',', $binds);

        $this -> execute ($query, array_values($values));

        return $this -> connection -> lastinsertid();
    }

    public function select($where = NULL, $order = NULL, $limit = NULL, $fields = '*')
    {
        $where = strlen ($where) ? 'WHERE ' . $where : '';
        $order = strlen ($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen ($limit) ? 'LIMIT ' . $limit : '';

        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        $this -> execute ($query , '');
    }

    public function update ($where, $values)
    {
        $fields = array_keys($values);

        $query = 'UPDATE' . $this -> table . ' SET ' . implode ('=?', $fields) . '=? WHERE ' . $where;
    }

    public function delete($where) 
    {
        $query = 'DELETE FROM' . $this -> table . ' WHERE ' . $where;

        $this -> execute ($query); 

        return true;
    }
}