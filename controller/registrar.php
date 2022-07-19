<?php
  include "../model/proprietario.class.php";
  include "../model/veiculo.class.php";
  session_start();
  if(isset($_GET['mes']) && isset($_GET['ganhos'])){
     $_SESSION['prop'][]= new Proprietario(
          $_GET['mes'],$_GET['ganhos'],$_GET['gastos'],$_GET['aportes'],$_GET['dividendos']);
     echo "<h1>PROPRIETÁRIO CADASTRADO!</h1>";
          header("Refresh:2;../view/cadProprietario.php");
  }

?>