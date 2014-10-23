<?php
Class Temas{
 
  private $_tema;
 
   public function retornaTemas(){
    $query = mysql_query("SELECT * FROM meetplace.temas");
    return $query;
  } 
}
?>