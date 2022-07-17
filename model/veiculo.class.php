<?php
  class Veiculo{
     private $placa;
     private $marca;
     private $modelo;
     private $ano;
     private $proprietario;

     public function __construct($a,$b,$c,$d,$e){
          $this->placa = $a;
          $this->marca = $b;
          $this->modelo = $c;
          $this->ano = $d;
          $this->proprietario = $e;
     }

     public function setPlaca($n){
          $this->placa = $n;
     }
     public function setMarca($n){
          $this->marca = $n;
     }
     public function setModelo($n){
          $this->modelo = $n;
     }
     public function setAno($n){
          $this->ano = $n;
     }
     public function setProprietario($n){
          $this->proprietario = $n;
     }
     public function getPlaca(){
          return $this->placa;
     }
     public function getMarca(){
          return $this->marca;
     }

     public function getModelo(){
          return $this->modelo;
     }

     public function getAno(){
          return $this->ano;
     }

     public function getProprietario(){
          return $this->proprietario;
     }

  }

?>