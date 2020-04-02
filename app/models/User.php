<?php

namespace App\Models;

use App\Utils\Database;
use App\Utils\Traits\modelsDatabasesFunctions;

class User extends Database {
    private $id;
    private $email;
    private $role;
    private $password;

    use modelsDatabasesFunctions;

    public function insert() {
        $db = Database::dbConnect();
        $sth = $db->prepare("INSERT INTO `user` (email, password) VALUES (:email, :password)");
        $sth->bindParam(':email', $this->email, $db::PARAM_STR);
        $sth->bindParam(':password', $this->password, $db::PARAM_STR);
        $sth->execute();
    }

    public static function findByEmail(string $email) {
        $db = Database::dbConnect();
        $sth = $db->prepare("SELECT * FROM `user` WHERE email = :email");
        $sth->bindParam(':email', $email, $db::PARAM_STR);
        $sth->execute();
        return $sth->fetchObject(__CLASS__);
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of roles
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of roles
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}