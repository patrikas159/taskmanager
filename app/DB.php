<?php

namespace Tasks;
//naujausia biblioteka darbui su duomenu baze
use PDO;
class DB {
    private static $connections = 'mysql:host=127.0.0.1';
    private static $user = 'root';
    private static $password = '';
    private static $database = 'php_todolist';
    //kad generuoti klaidas sita metoda is PDO reikia pasiimti
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ];

    public static function connect()
    {
        try {
            return $pdo = new PDO(self::$connections . ';dbname=' . self::$database,
                self::$user,
                self::$password,
                self::$options
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
