<?php
  namespace geom\figures;

  class Cercle{

    private $amplada;
    private $alcada;

        
    /**
     * __construct
     * Inicia las variables con éste contructor
     * @param  float $ample
     * @param  float $alt
     * @return void
     */
    function __construct($ample, $alt) {
      $this->amplada = $ample;
      $this->alcada = $alt;
    }

        
    /**
     * area
     * Multiplica amplada por alçada de un círculo
     * para calcular el área
     * @return void
     */
    function area(){
      return $this->amplada*$this->alcada;
    }

        
    /**
     * perimetre
     * Calcula el perímetro multiplicando amplada por 2
     * mas la alçada por 2
     * @return void
     */
    function perimetre(){
      return $this->amplada*2 + $this->alcada*2;
    }
    
    /**
     * getAmplada
     * Obtiene la amplada total del círculo
     * @return void
     */
    function getAmplada(){
      return $this->amplada;
    }

        
    /**
     * getAlcada
     * Obtiene la alçada total del círculo
     * @return void
     */
    function getAlcada(){
      return $this->alcada;
    }
  }

 ?>
