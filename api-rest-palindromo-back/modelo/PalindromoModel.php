<?php 
namespace modelo;
use config\Main;

class PalindromoModel 
{  
   public $table;
   private $frase;
   private $estado;


  
 	public function setFrase($frase) {
        $this->frase = $frase;
    }
 
  
  public function setEstado($estado) {
        $this->estado = $estado;
    }
 
  
 public  function savePalindromo(){
  $BD=new Main();
  $sql="insert  into ".$this->table."(frases,estado) 
  values('".$this->frase."','".$this->estado."')";
  if($BD->dbAbreDatabase($sql)){
   return  1;
  }else {
  return 0;
  } 

   }

  public function getAll(){
   //$Frases_palindromas=array();
   $BD=new Main();
   $sql="SELECT * FROM ".$this->table." ORDER BY  estado ASC";
   $query=$BD->dbAbreDatabase($sql);
   while ( $data=$BD->dbTrareGistro($query)) {
    $Frases_palindromas[]=$data;
   } 
   return $Frases_palindromas;
  }
  public   function TotalPalidromos(){
   $TotalDatos=array(); 
    $BD=new Main();
   $sql="SELECT count(*) as total,estado FROM ".$this->table." GROUP by estado";
  $query=$BD->dbAbreDatabase($sql);
   while ( $data=$BD->dbTrareGistro($query)) {
    $total[]=$data;
   } 
   return $total;
 
  } 

	
}


?>