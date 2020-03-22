<?php

namespace routes;

use controlador\PalindromoController;
header('Access-Control-Allow-Origin: *');
//print_r($_POST);
class Route {
 public static function add(){

$request = $_SERVER['REQUEST_URI'];

$dat=explode("/",$request);
 if(empty($dat[3])){
 $REQUEST_URI="/";
 }else{
 $REQUEST_URI=$dat[3];
}

switch ($REQUEST_URI) {
    case 'save' :
      echo PalindromoController::insertPalindromo();
        break;
      case'list':
  echo PalindromoController::listarPalabras();
      break;
     case 'contadores':
  echo  PalindromoController::conTadores(); 
     break;
    default:
      echo "404";
      break;
   
}

 }
  
}
?>