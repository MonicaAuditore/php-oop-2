<?php 
require_once __DIR__ . './categorie.php';
require_once __DIR__ . './prodotti.php';


class Card {
  public $prodotto;
  public $categoria;

  function __construct($prodotto, $categoria) {
    $this->prodotto = $prodotto;
    $this->categoria = $categoria;
  }
  
  public function printCard() {
  //card del prodotto
  echo '<div style="display: flex; gap: 60px; justify-content: flex-start;
  align-items: flex-end;">';
  echo '<div class="card" style="text-align: center;
  padding: 28px;
  border-radius: 30px;">';
  echo '<img class="prodotto-img" style="width: 190px;" src="' . $this->prodotto->immagine . '" alt="' . $this->prodotto->nome . '">';

  echo '<h2>' . $this->prodotto->nome . '</h2>';
  echo '<h3>' . $this->prodotto->prezzo . '</h3>';
  echo '<img class="categoria-icona" style="width: 42px;" src="' . $this->categoria->icona . '">';

  //instanceof verifica se un oggetto è un'istanza di una classe padre
  if ($this->prodotto instanceof ProdottoCibo) {
    echo '<p>Prodotto alimentare</p>' ;
  } else if ($this->prodotto instanceof ProdottoGioco) {
    echo '<p>Giocattolo</p>';
  } else if ($this->prodotto instanceof ProdottoCuccia) {
    echo '<p>Cuccia</p>';
  } else {
    echo '<p>Prodotto generico</p>';
  }
  echo '</div>';
  }
  
  
}
echo '</div>';




?>