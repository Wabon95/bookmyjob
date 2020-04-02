<?php

namespace App\Utils\Traits;

use App\Utils\Database;

trait modelsDatabasesFunctions {

    public static function find(int $id) {
        $db = Database::dbConnect();
        $fullyQualifiedArrayOfClass = explode('\\', __CLASS__);
        $class = strtolower(end($fullyQualifiedArrayOfClass));
        $sth = $db->prepare("SELECT * FROM `$class` WHERE id = ?");
        $sth->execute([$id]);
        return $sth->fetchObject(__CLASS__);
    }

    public static function findAll() {
        $db = Database::dbConnect();
        $fullyQualifiedArrayOfClass = explode('\\', __CLASS__);
        $class = strtolower(end($fullyQualifiedArrayOfClass));
        $sth = $db->prepare("SELECT * FROM `$class`");
        $sth->execute();
        $array = [];
        while ($row = $sth->fetchObject(__CLASS__)) {
            $array[] = $row;
        }
        return $array;
    }
}