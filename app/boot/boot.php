<?php

function __autoload($class_name) {
    $sPath = __DIR__.'/../model/'. mb_strtolower($class_name) . '.php';
    if(file_exists($sPath)){
      include_once  $sPath;
    }
}