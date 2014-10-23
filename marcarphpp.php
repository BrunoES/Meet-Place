
     <?php
 session_start();
  // $nome = strtoupper($_POST['nome']);
   $nome =  strtolower ($_POST['nome']);
   $nome = str_replace(' ', '', $nome);
   $nome = trim($nome, " ");
   $endereco = $_POST['endereco'];
   $x = $_POST['lat'];
   $y = $_POST['lng'];
   //$grupo = $_POST['grupos'];
   $idgrupo = $_POST['grupos'];
   $email =  $_SESSION['email'];
   
   echo $nome;
   echo $endereco;
   echo $x;
   echo $y;
   echo $idgrupo."</b></b>";
 
?>
     