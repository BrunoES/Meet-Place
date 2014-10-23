<?php
$conn = mysql_connect("localhost","root","");
   mysql_select_db("meetplace",$conn);
  if (mysqli_connect_errno()) {
  echo "Falha na conexao: " . mysqli_connect_error();
}
 mysql_select_db("meetplace",$conn);
?>