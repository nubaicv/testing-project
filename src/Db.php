<?php

// src/Db.php

namespace App;

abstract class Db {

    private static $db;
    private static $config = array("DB_HOST" => "localhost", "DB_NAME" => "khymnego_kn",
        "DB_USER" => "khymnego_kn", "DB_PASS" => "?7yN6LU1(SSQ");

    public static function init() {
        if (!self::$db) {
            try {
                
                $timezone = "Atlantic/Cape_Verde";
                
                $dsn = "mysql:host=" . self::$config["DB_HOST"] . ";dbname=" . self::$config["DB_NAME"] . ";charset=utf8";
                self::$db = new PDO($dsn, self::$config["DB_USER"], self::$config["DB_PASS"]);
                self::$db->exec("SET time_zone = '$timezone'");
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Database connection error: " . $e->getCode());
            }
        }
        return self::$db;
    }

}
