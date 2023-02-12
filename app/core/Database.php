<?php

class Database
{
    public $conn;
    public PDOStatement $stmt;

    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'ticketing';

        $conn = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
        $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $this->conn = $conn;
    }

    public function query(string $query)
    {
        $this->stmt = $this->conn->prepare($query);
        return $this;
    }

    public function bind($param, $value)
    {
        $options = [
            'string' => PDO::PARAM_STR,
            'integer' => PDO::PARAM_INT,
            'boolean' => PDO::PARAM_BOOL,
            'null' => PDO::PARAM_NULL
        ];

        $type = gettype(strtolower($param));
        $pdo_type = $options[$type];

        $this->stmt->bindParam($param, $value, $pdo_type);
        return $this;
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function get()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function first()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}
