<?php
namespace app\lib;

abstract class Database {

    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = 'jb141081';
    private static $dbname = 'db_conade_sis';
    private static $conn;

    public static function getConnection(){

        try {
           
                self::$conn = new \PDO('mysql:host='. self::$host. ';dbname='. self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$conn->exec('set names utf8');
                return self::$conn;
            
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }        
    }
}