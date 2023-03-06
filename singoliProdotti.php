<?php 
require_once __DIR__ . '/cardProdotti.php';


$prodotto_test = new ProdottoCibo("Crocchette per gatti", "Cibo secco per gatti adulti", 12.99, "immagini/crocchette_gatti.jpg", "secco", "1 kg");
$categoria_test = new CategoriaGatto("medio", "adulto", "icone/gatto.png", "corto");
$card_test = new Card($prodotto_test, $categoria_test);
echo $card_test->printCard();

?>