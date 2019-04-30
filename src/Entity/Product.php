<?php

// src/Entity/Product.php

namespace App\Entity;

class Product {
    
    protected $id;
    protected $created_on;
    protected $updated_on;
    protected $name;
    protected $description;
    protected $price;
    protected $expiration_date;
    
    //SETTERS AND GETTERS
    public function getId() {
        return $this->id;
    }
    
    public function getCreated_on() {
        return $this->created_on;
    }
    
    public function getUpdated_on() {
        return $this->updated_on;
    }
    
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
