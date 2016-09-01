<?php
$outTempl = "";
if(!empty($aUrl[0])) {
    
 $sMod = "default";
 $sFile = "index";
 if(!empty($aUrl[1])){$sMod = $aUrl[1];}
 if(!empty($aUrl[2])){$sFile = $aUrl[2];}
 $sFilePath = __DIR__ . "/../view/".$aUrl[0]."/".$sMod."/".$sFile.".php";
 if(file_exists($sFilePath)) {
     ob_start(); 
     require_once $sFilePath;
     $outTempl = ob_get_contents(); 
     ob_end_clean(); 
 } 
}

if(!empty($outTempl)) {
    header('Content-Type: text/html; charset=utf-8');
    $sFileLayout = __DIR__ . "/../view/layout/" . config::g()->layout . ".php";
    if(file_exists($sFileLayout)){
        require_once $sFileLayout;
    }else{
        echo $outTempl;
    }
    
}

