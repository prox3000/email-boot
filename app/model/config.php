<?php

class config {

    protected static $instance;  
    protected $connect;
    protected $data;
    private function __construct() { /* ... */ }
    private function __clone() { /* ... */ }
    private function __wakeup() { /* ... */ }
    
    
    public static function g(){
        return self::getInstance();
    }
    
    public static function getInstance() {
        if ( is_null(self::$instance) ) {
          self::$instance = new config();
          self::$instance->db = db::getInstance();   
        }
        return self::$instance;
    }

    public function __set($name, $value){
        self::getInstance()->data[$name] = $value;
    }
    
    public function __get($name) 
    {
        if (array_key_exists($name, self::getInstance()->data)) {
            return self::getInstance()->data[$name];
        }
        return null;
    }
    
    public function GetLink() { return self::getInstance()->connect; }
    
    public function doAction() { /* ... */ }

}
