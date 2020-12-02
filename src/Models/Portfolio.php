<?php

namespace Portfolio\Models;

use Portfolio\Utils\Database;
use PDO;

class Portfolio extends CoreModel
{
    private $user_id;
    private $title;
    private $creation_date;
    private $description;
    private $url;


    /**
     * Get the value of description
     */ 
    public function getUser_id()
    {
        return $this->USER_ID;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

        /**
     * Get the value of description
     */ 
    public function getTitle()
    {
        return $this->TITLE;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

        /**
     * Get the value of description
     */ 
    public function getCreation_date()
    {
        return $this->CREATION_DATE;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setCreation_date($creation_date)
    {
        $this->creation_date = $creation_date;

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

        /**
     * Get the value of description
     */ 
    public function getUrl()
    {
        return $this->URL;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = '
        SELECT *
        FROM `PORTFOLIO`
        ';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }
}