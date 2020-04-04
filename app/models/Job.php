<?php

namespace App\Models;

use App\Utils\Database;
use App\Utils\Traits\modelsDatabasesFunctions;

class Job extends Database {
    private int $id;
    private string $name;
    private string $link;
    private string $enterprise;
    private int $salary;
    private string $address;
    private string $contract;
    private string $contact;
    private string $description;
    private string $statut;

    use modelsDatabasesFunctions;

    public function insert() {
        $db = Database::dbConnect();
        $sth = $db->prepare("INSERT INTO `job` (name, link, enterprise, salary, address, contract, contact, description, statut) VALUES (:name, :link, :enterprise, :salary, :address, :contract, :contact, :description, :statut)");
        $sth->bindParam(':name', $this->name, $db::PARAM_STR);
        $sth->bindParam(':link', $this->link, $db::PARAM_STR);
        $sth->bindParam(':enterprise', $this->enterprise, $db::PARAM_STR);
        $sth->bindParam(':salary', $this->salary, $db::PARAM_STR);
        $sth->bindParam(':address', $this->address, $db::PARAM_STR);
        $sth->bindParam(':contract', $this->contract, $db::PARAM_STR);
        $sth->bindParam(':contact', $this->contact, $db::PARAM_STR);
        $sth->bindParam(':description', $this->description, $db::PARAM_STR);
        $sth->bindParam(':statut', $this->statut, $db::PARAM_STR);
        $sth->execute();
    }

    // GETTERS
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getLink() {
        return $this->link;
    }
    public function getEnterprise() {
        return $this->enterprise;
    }
    public function getSalary() {
        return $this->salary;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getContract() {
        return $this->contract;
    }
    public function getContact() {
        return $this->contact;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getStatut() {
        return $this->statut;
    }

    // SETTERS
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }
    public function setLink(string $link): self {
        $this->link = $link;
        return $this;
    }
    public function setEnterprise(string $enterprise): self {
        $this->enterprise = $enterprise;
        return $this;
    }
    public function setSalary(string $salary): self {
        $this->salary = $salary;
        return $this;
    }
    public function setAddress(string $address): self {
        $this->address = $address;
        return $this;
    }
    public function setContract(string $contract): self {
        $this->contract = $contract;
        return $this;
    }
    public function setContact(string $contact): self {
        $this->contact = $contact;
        return $this;
    }
    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }
    public function setStatut(string $statut): self {
        $this->statut = $statut;
        return $this;
    }
}