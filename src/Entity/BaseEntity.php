<?php

// src/Entity/BaseEntity.php

namespace App\Entity;

use App\Db;

abstract class BaseEntity {
    
    protected $_db;
    protected $_query;

    public function __construct() {

        $this->_db = Db::init();
    }
}