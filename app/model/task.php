<?php

class task {

    protected static $instance;  
    protected $db;
    private function __construct() { /* ... */ }
    private function __clone() { /* ... */ }
    private function __wakeup() { /* ... */ }
    
    public static function getInstance() {
        if ( is_null(self::$instance) ) {
            self::$instance = new task();
            self::$instance->db = db::getInstance();
        }
        return self::$instance;
    }

    
    public function getTaskById($id){
        
    }
    
    public function getActivTask(){
        return $this->db->getTable('ld_task',[
            'where' => 'where `stat` = 0'
        ]);
    }
    
    public function setTask($id,$param){
        
    }
    
    public function doAction() { /* ... */ }

}

