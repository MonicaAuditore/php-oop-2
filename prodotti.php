<?php

require_once __DIR__.'/traits/nome.php';

class Prodotto {

use nome;

  public $nome;
  public $descrizione;
  public $prezzo;
  public $immagine;

  public function __construct($nome, $descrizione, $prezzo, $immagine) {
      $this->nome = $nome;
      $this->descrizione = $descrizione;
      $this->prezzo = $prezzo;
      $this->immagine = $immagine;
  }
}

class ProdottoCibo extends Prodotto {
  public $seccoUmido;
  public $dimensioneConfezione;

  public function __construct($nome, $descrizione, $prezzo, $immagine, $seccoUmido, $dimensioneConfezione) {
      parent::__construct($nome, $descrizione, $prezzo, $immagine);
      $this->seccoUmido = $seccoUmido;
      $this->dimensioneConfezione = $dimensioneConfezione;
  }
}

class ProdottoGioco extends Prodotto {
  public $materiale;
  public $funzione;

  public function __construct($nome, $descrizione, $prezzo, $immagine, $materiale, $funzione) {
      parent::__construct($nome, $descrizione, $prezzo, $immagine);
      $this->materiale = $materiale;
      $this->funzione = $funzione;
  }
}

class ProdottoCuccia extends Prodotto {
  public $dimensione;
  public $materiale;

  public function __construct($nome, $descrizione, $prezzo, $immagine, $dimensione, $materiale) {
      parent::__construct($nome, $descrizione, $prezzo, $immagine);
      $this->dimensione = $dimensione;
      $this->materiale = $materiale;
  }
}


?>