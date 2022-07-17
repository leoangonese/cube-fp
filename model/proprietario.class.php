<?php
  class Proprietario{
     private $mes;
     private $ganhos;
     private $gastos;
     private $aportes;
     private $dividendos;

     //Constructor
     public function __construct($m,$g){
          $this->mes = $m;
          $this->ganhos = $g;
          // $this->gastos = $gt;
          // $this->aportes = $a;
          // $this->dividendos = $d;
     }

     //Setters
     public function setMes($n){
          $this->mes = $n;
     }
     public function setGanhos($n){
          $this->ganhos = $n;
     }
     // public function setGastos($n){
     //      $this->gastos = $n;
     // }
     // public function setAportes($n){
     //      $this->aportes = $n;
     // }
     // public function setDividendos($n){
     //      $this->dividendos = $n;
     // }

     //Getters
     public function getMes(){
          return $this->mes;
     }
     public function getGanhos(){
          return $this->ganhos;
     }
     // public function getGastos(){
     //      return $this->gastos;
     // }
     // public function getAportes(){
     //      return $this->aportes;
     // }
     // public function getDividendos(){
     //      return $this->dividendos;
     // }

  }

?>