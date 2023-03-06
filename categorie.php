<?php

class Categoria {
  public $taglia;
  public $eta;
  public $icona;

    function __construct($taglia, $eta, $icona) {
    $this->taglia = $taglia;
    $this->eta = $eta;
    $this->icona = $icona;
    }
}

class CategoriaCane extends Categoria {
  public $razza;

  function __construct($taglia, $eta, $icona, $razza) {
    parent::__construct($taglia, $eta, $icona);
    $this->razza = $razza;
  }
}
class CategoriaGatto extends Categoria {
  public $pelo;
  
  function __construct($taglia, $eta, $icona, $pelo) {
    parent::__construct($taglia, $eta, $icona);
    $this->pelo = $pelo; 
  }
}

?>