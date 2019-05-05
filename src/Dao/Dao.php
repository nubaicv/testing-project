<?php

// src/Dao/Dao.php

namespace App\Dao;

use App\Db;

abstract class Dao {
    
    protected $_db;
    protected $_query;

    public function __construct() {

        $this->_db = Db::init();
    }
}