<?php

namespace Portfolio\Models;

use Portfolio\Utils\Database;
use PDO;

class Experiences extends CoreModel
{
    private $user_id;
    private $title;
    private $company;
    private $description;
    private $start_date;
    private $end_date;

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
    public function setLast_name($user_id)
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
    public function getCompany()
    {
        return $this->COMPANY;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setCompany($company)
    {
        $this->company = $company;

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
    public function getStart_date()
    {
        return $this->START_DATE;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

        /**
     * Get the value of description
     */ 
    public function getEnd_date()
    {
        return $this->END_DATE;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setEnd_date($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = '
        SELECT *
        FROM `EXPERIENCES`
        ';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }
}