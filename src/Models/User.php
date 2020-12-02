<?php

namespace Portfolio\Models;

use Portfolio\Utils\Database;
use PDO;

class User extends CoreModel
{
    private $last_name;
    private $username;
    private $first_name;
    private $birth_date;
    private $description;

    /**
     * Get the value of description
     */ 
    public function getLast_name()
    {
        return $this->LAST_NAME;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

            /**
     * Get the value of description
     */ 
    public function getUsername()
    {
        return $this->USERNAME;
    }

        /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

            /**
     * Get the value of description
     */ 
    public function getFirst_name()
    {
        return $this->FIRST_NAME;
    }

        /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

            /**
     * Get the value of description
     */ 
    public function getBirth_date()
    {
        return $this->birth_date;
    }

        /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setBirth_date($birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->DESCRIPTION;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = '
        SELECT *
        FROM `USER`
        ';
        $pdoStatement = $pdo->query($sql);
        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $results = $pdoStatement->fetch();
        return $results;
    }
}