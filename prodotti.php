<?php

require_once __DIR__.'/traits/nome.php';

class Prodotto {
  public $nome;
  public $descrizione;
  public $prezzo;
  public $immagine;

  public function __construct($nome, $descrizione, $prezzo, $immagine) {
      $this->setNome($nome);
      $this->descrizione = $descrizione;
      $this->prezzo = $prezzo;
      $this->immagine = $immagine;
  }

  public function setNome($nome) {
    if (empty($nome)) {
      throw new Exception('Il nome non può essere vuoto');
    }
    $this->nome = $nome;
  }
}

try {
  // istanzio un oggetto Prodotto con nome vuoto
  $prodotto = new Prodotto('', 'Descrizione prodotto', 9.99, 'immagine.jpg');
} catch (Exception $e) {
  // catturo l'eccezione e gestisco l'errore
  echo 'Si è verificato un errore: ' . $e->getMessage();
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