<?php
if(!isset($_SESSION['login'])){

   if(isset($_POST['acao'])){
      $login = 'username';
      $senha = 'password';

      $loginForm = $_POST['login'];
      $senhaForm = $_POST['senha'];

      if($login == $loginForm && $senha == $senhaForm){
         $_SESSION['login'] = true;
         header('Location: ./view/index.php');
      }else{
         echo '<h4 style="color: red; text-align:center; padding-top:50px">Dados inválidos.</h4>';
      }
   }

   include('./view/login.php');
}else{
   if(isset($_GET['logout'])){
      unset($_SESSION['login']);
      session_destroy();
      header('Location: index.php');
   }
   include('cadProprietario.php');
}

?>