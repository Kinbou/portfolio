<?php

namespace Portfolio\Models;

class CoreModel
{
    protected $id;
    protected $name;
    protected $created_at;
    protected $updated_at;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}