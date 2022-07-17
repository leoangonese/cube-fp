<?php
session_start();
if(!isset($_SESSION['prop'])){
   $_SESSION['prop']= array();
}

if(!isset($_SESSION['vei'])){
   $_SESSION['vei']= array();
}
header("Refresh:0; view");

?>