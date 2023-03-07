<?php

trait Nome {

 public $nome;

 public function setNome($nome) {
  if (empty($nome)) {
    throw new Exception('Il nome non può essere vuoto');
  }
  $this->nome = $nome;
}

}

?>