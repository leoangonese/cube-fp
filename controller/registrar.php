<?php
  include "../model/proprietario.class.php";
  include "../model/veiculo.class.php";
  session_start();
  if(isset($_GET['nome']) && isset($_GET['cpf'])){
     $_SESSION['prop'][]= new Proprietario(
          $_GET['nome'],$_GET['cpf']);
     echo "<h1>PROPRIETÁRIO CADASTRADO!</h1>";
          header("Refresh:2;../view/cadProprietario.php");
  }

?>