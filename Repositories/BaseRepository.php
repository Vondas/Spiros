<?php


namespace Repositories;

use Helpers\DatabaseHelper\Database;

class BaseRepository
{
    static private $database = NULL;
    static protected $pdo;

    public function __construct() {
        if (self::$database === NULL) {
            self::$database = new Database();
            self::$pdo = self::$database->connect();
        }
    }
}