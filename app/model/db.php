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
            global $dbConfig;
            self::$instance->connect = mysql_connect(
                    $dbConfig['host'],
                    $dbConfig['login'],
                    $dbConfig['pass']);
            mysql_select_db($dbConfig['bd'], self::$instance->connect);
            
        }
        return self::$instance;
    }

    public function GetLink() { return self::getInstance()->connect; }
    
    public function doAction() { /* ... */ }

}
