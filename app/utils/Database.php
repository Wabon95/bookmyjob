<?php

namespace App\Utils;

abstract class Database {
    private static $pdo;

    protected static function dbConnect() {
        if (self::$pdo) {
            return self::$pdo;
        } else {
            self::$pdo = new \PDO("mysql:host=localhost;dbname=book_my_job", 'bookmyjob', '4GDMzwws9KI6G4Eb');
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_WARNING);
            return self::$pdo;
        }
    }
}