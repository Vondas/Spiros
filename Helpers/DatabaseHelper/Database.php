<?php


namespace Helpers\DatabaseHelper;


class Database
{
    protected $driver;
    protected $db;
    protected $host;
    protected $port;
    protected $username;
    protected $password;

    public function __construct() {
        $this->driver = getenv('DATABASE_DRIVER');
        $this->db = getenv('DATABASE_NAME');
        $this->host = getenv('DATABASE_HOST');
        $this->username = getenv('DATABASE_USERNAME');
        $this->password = getenv('DATABASE_PASSWORD');
    }

    public function connect() {
        try {
            $pdo = new \PDO("$this->driver:dbname=$this->db;
            host=$this->host;
            port=$this->port;",
                $this->username,
                $this->password);

            $pdo->exec("SET NAMES UTF8");
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }

        return $pdo;
    }
}