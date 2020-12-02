<?php

namespace Portfolio\Models;

use Portfolio\Utils\Database;
use PDO;

class Formations extends CoreModel
{
    private $user_id;
    private $title;
    private $school;
    private $graduate;
    private $start_date;
    private $end_date;
    private $description;

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
        return $this->title;
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
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

            /**
     * Get the value of description
     */ 
    public function getGraduate()
    {
        return $this->graduate;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setGraduate($graduate)
    {
        $this->graduate = $graduate;

        return $this;
    }

            /**
     * Get the value of description
     */ 
    public function getStart_date()
    {
        return $this->start_date;
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
        return $this->end_date;
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
        FROM `FORMATIONS`
        ';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}