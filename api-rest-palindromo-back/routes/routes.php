<?php
use controlador\PalindromoController;
header('Access-Control-Allow-Origin: *');

$route->get('/',function(){
  echo "hola";
  //echo  PalindromoController::conTadores(); 
 });
$route->post('/save',function(){
 echo PalindromoController::insertPalindromo();
});


$route->get('/list',function(){
  echo PalindromoController::listarPalabras();
});

 $route->get('/contadores',function(){
  echo  PalindromoController::conTadores(); 
 });



?>