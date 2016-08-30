<?php
$aUrl=explode("/",$_SERVER['REQUEST_URI']);
if(empty($aUrl[0]) && count($aUrl)>1){
   array_shift($aUrl); 
}

if(!empty($aUrl[0]))
switch($aUrl[0]){
   case 'command': 
       
       $sFilePath = __DIR__ . "/../command/".$aUrl[1].".php";
       $pbClass = $aUrl[1]."Command";
       if(!empty($aUrl[1]) && file_exists($sFilePath)) {
           require_once $sFilePath;
           
           if(class_exists($pbClass)){
               $method = "base";
               if(!empty($aUrl[2])){
                   $method = $aUrl[2];
               }
               
               if(method_exists($pbClass,$method)) {
                   $pObject = new $pbClass;
                   $pObject->$method();
               }
           }
       }
       
       break;
}

