<?php
Class EstadosUF{
 
  private $_uf;

  public function setEstadosUF($uf){
    $this->_uf = $uf;
  }
 
   public function retornaEstadosUF(){
    $query = mysql_query("SELECT * FROM meetplace.tb_estados");
    return $query;
  } 
}
?>