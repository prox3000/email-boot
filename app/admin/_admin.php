<?php

class Admin {
    private $layput = "";
    private $admin = "";
    public function __construct() {
        $this->isAdmin();
    }
    
    public function isAdmin(){
       if( isset($_SESSION['admin']) && $_SESSION['admin']){
           return true;
       }else{
           
           if( $this->checkLogin() ){
               return true;
           }
           
           config::g()->view_file = "login";
           config::g()->view_mode = "base";
           config::g()->no_topmenu = true;
           return false;
       }
    }
    
    private function checkLogin(){
        if(!empty($_POST['login']) && !empty($_POST['pass'])){
            global $aGlobalConf;
            if($_POST['login'] == $aGlobalConf['superadmin']['login'] && $_POST['pass'] == $aGlobalConf['superadmin']['pass']) {
                $_SESSION['admin'] = true;
                return true;
            }
            
        }
        return false;
    }
    
    protected function LogOut(){
        unset($_SESSION['admin']);
        config::g()->view_file = "login";
        config::g()->view_mode = "base";
        config::g()->no_topmenu = true;
    }
}
