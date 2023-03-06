<?php

class Categoria {
  public $taglia;
  public $eta;

    function __construct($taglia, $eta) {
    $this->taglia = $taglia;
    $this->eta = $eta;
    }
}

class CategoriaCane extends Categoria {
  public $razza;

  function __construct($taglia, $eta, $razza) {
    parent::__construct($taglia, $eta);
    $this->razza = $razza;
  }
}
class CategoriaGatto extends Categoria {
  public $pelo;
  
  function __construct($taglia, $eta, $pelo) {
    parent::__construct($taglia, $eta);
    $this->pelo = $pelo; 
  }
}

?>