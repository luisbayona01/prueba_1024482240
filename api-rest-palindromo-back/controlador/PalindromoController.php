<?php 
namespace controlador;

use modelo\PalindromoModel;
use libs\LibPalinDromo;
class PalindromoController
{ 
   
   public static  function insertPalindromo(){
    
    $PalindromoModel=  new PalindromoModel();
    $PalindromoModel->table="frasespalindromas";
    
    $frase=$_POST['frase'];
    $frase_validar=LibPalinDromo::eliminarAceNtos($frase);  
    $palindroma=LibPalinDromo::detectarPalinDromo($frase_validar);
    $PalindromoModel->setFrase($frase_validar);
    $PalindromoModel->setEstado($palindroma);
     

    if ($PalindromoModel->savePalindromo()<1){
     $respuesta= array("respuesta"=>"hubo un problema al guardar") ;

    }else{
     //return "se gurado exitosa mente";
     $respuesta= array("respuesta"=>"se gurado exitosa mente") ;

    }
  return json_encode($respuesta);
   
   } 
  public static  function listarPalabras(){
    $PalindromoModel=  new PalindromoModel();
    $PalindromoModel->table="frasespalindromas";
   return  json_encode($PalindromoModel->getAll());
  }

    public static function conTadores(){
     
    $PalindromoModel=  new PalindromoModel();
    $PalindromoModel->table="frasespalindromas";
   return  json_encode($PalindromoModel->TotalPalidromos());
    }
}



?>