<?php

// src/Dao/Product_obj.php

namespace App\Dao;

use Symfony\Component\Validator\Constraints as Assert;

class Product_obj {
    
    /**
     * @Assert\NotBlank
     */
    protected $name;
    
    /**
     * @Assert\NotBlank
     */
    protected $description;
    
    /**
     * @Assert\NotBlank
     */
    protected $price;
    
    /**
     * @Assert\NotBlank
     */
    protected $expiration_date;
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($price) {
        $this->price = $price;
    }
    
    public function getExpirationDate() {
        return $this->expiration_date;
    }
    
    public function setExpirationDate($date) {
        $this->expiration_date = $date;
    }
}

