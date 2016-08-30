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

    public function getTable($sNameTable,$param = []) {
        $p['order_by'] = " ORDER BY id ";
        $p['where'] = "";
        $p['select'] = "*";
        
        if(!empty($param)){
            foreach ($param as $key => $param){
                $p[$key] = $param;
            }
        }
        
        $sQuery = "SELECT {$p['select']} FROM {$sNameTable} {$p['where']} {$p['order_by']}";
        $nResult = mysql_query($sQuery) or die(mysql_error());
        $aRet = array();
        while($row = mysql_fetch_array($nResult,MYSQL_ASSOC)) {
          $aRet[] = $row;
        }
        return $aRet;
    }
    
    public function GetLink() { return self::getInstance()->connect; }
    
    public function doAction() { /* ... */ }

}
