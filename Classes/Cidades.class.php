<?php
Class Cidades{
 
  private $_uf;

  public function setCidades($uf){
    $this->_uf = $uf;
  }
 
   public function retornaCidadesUF($uf){
    $query = mysql_query("SELECT * FROM meetplace.tb_cidades where estado='$uf'");
    return $query;
  } 
}
?>