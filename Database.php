<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author 1
 */
class Database extends mysqli 
{ 
   /** 
   *  @var object Singleton instance 
   */ 
   private static $instance = null; 
    
   // DB connection parameters: 
   private $dbHost = 'localhost'; 
   private $dbUser = 'root'; 
   private $dbPwd  = ''; 
   private $dbName = 'fstat'; 
    
   /** 
   *  Constructor 
   *  @return void 
   */ 
   private function __construct() 
   { 
      @parent::__construct( 
         $this->dbHost, 
         $this->dbUser, 
         $this->dbPwd, 
         $this->dbName 
      ); 
      if(mysqli_connect_errno()) 
      { 
         throw new Exception( 
            mysqli_connect_error(),  
            mysqli_connect_errno() 
         ); 
      } 
   } 
    
   /** 
   *  Do the singleton thing 
   *  @return object Database 
   */ 
   public function getInstance() { 
      if(self::$instance === null) 
      { 
         $c = __CLASS__; 
         self::$instance = new $c;  
      } 
      return self::$instance; 
   } 

   public function __clone() 
   { 
      throw new Exception("Cannot clone ".__CLASS__." class"); 
   } 
}
?>
