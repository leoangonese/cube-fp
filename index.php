<?php
if(!isset($_SESSION['login'])){

   if(isset($_POST['acao'])){
      $login = 'joao';
      $senha = 'senha';

      $loginForm = $_POST['login'];
      $senhaForm = $_POST['senha'];

      if($login == $loginForm && $senha == $senhaForm){
         $_SESSION['login'] = true;
         header('Location: ./view/cadProprietario.php');
      }else{
         echo 'Dados inválidos.';
      }
   }

   include('login.php');
}else{
   if(isset($_GET['logout'])){
      unset($_SESSION['login']);
      session_destroy();
      header('Location: index.php');
   }
   include('cadProprietario.php');
}

?>