<?php

class task {

    protected static $instance;  
    protected $connect;
    private function __construct() { /* ... */ }
    private function __clone() { /* ... */ }
    private function __wakeup() { /* ... */ }
    
    public static function getInstance() {
        if ( is_null(self::$instance) ) {
            self::$instance = new task();
            self::$instance->connect = db::getInstance()->GetLink();
        }
        return self::$instance;
    }

    
    public function getTaskById($id){
        
    }
    
    public function getActivTask(){
        
    }
    
    public function setTask($id,$param){
        
    }
    
    public function doAction() { /* ... */ }

}

