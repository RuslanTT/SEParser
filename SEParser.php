<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SEParser
 *
 * @author RTT
 */
class SEParser {
    public $IO;
    public $db;
    function __construct() {
        require_once 'Database.php';
        require_once 'IO.php';
        require_once 'phpQuery.php';
        
        $this->db = Database::getInstance();
        $this->IO = new IO();
    }
}

?>
