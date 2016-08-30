<?php

class db {

    protected static $instance;  
    protected $connect;
    private function __construct() { /* ... */ }
    private function __clone() { /* ... */ }
    private function __wakeup() { /* ... */ }
    
    public static function getInstance() {
        if ( is_null(self::$instance) ) {
            self::$instance = new db();
            
        }
        return self::$instance;
    }

    public function GetLink() { return self::getInstance()->connect; }
    
    public function doAction() { /* ... */ }

}
