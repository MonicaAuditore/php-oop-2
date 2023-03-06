<?php 
require_once __DIR__ . '/cardProdotti.php';

$prodottoUno = new ProdottoCibo("Crocchette per cani Yarrah", "Cibo secco per cani adulti", 14.95 . ' Euro', "img/crocchette-cane.jpg", "secco", "2 kg");
$categoriaUno = new CategoriaCane("medio", "adulto", "img/cane.png", "qualsiasi razza");
$cardUno = new Card($prodottoUno, $categoriaUno);
echo $cardUno->printCard();

?>