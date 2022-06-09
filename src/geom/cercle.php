<?php
  namespace geom\figures;

  class Cercle{

    private $amplada;
    private $alcada;

    function __construct($ample, $alt) {
      $this->amplada = $ample;
      $this->alcada = $alt;
    }

    function area(){
      return $this->amplada*$this->alcada;
    }

    function perimetre(){
      return $this->amplada*2 + $this->alcada*2;
    }

    function getAmplada(){
      return $this->amplada;
    }

    function getAlcada(){
      return $this->alcada;
    }
  }

 ?>
