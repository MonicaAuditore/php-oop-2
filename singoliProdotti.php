<?php 
require_once __DIR__ . '/cardProdotti.php';
require_once __DIR__ . '/prodotti.php';

$prodottoUno = new ProdottoCibo("Crocchette per cani Yarrah", "Cibo secco per cani adulti", 14.95 . ' Euro', "img/crocchette-cane.png", "secco", "2 kg");
$categoriaUno = new CategoriaCane("medio", "adulto", "img/cane.png", "qualsiasi razza");
$cardUno = new Card($prodottoUno, $categoriaUno);
echo $cardUno->printCard();

$prodottoDue = new ProdottoGioco("Puzzle per cani", "giocattoli addestramento interattivo", 19.99 . ' Euro', "img/gioco-cane.png", "legno", "sviluppo intelligenza");
$categoriaDue = new CategoriaCane("qualsiasi", "adulto", "img/cane.png", "qualsiasi razza");
$cardDue = new Card($prodottoDue, $categoriaDue);
echo $cardDue->printCard();

$prodottoTre = new ProdottoCuccia("Cuscino per gatto", "cuscino morbido per gatti", 17.95 . ' Euro', "img/cuccia-gatto.png", "18L x 40l x 40Sp cm", "Tessuto");
$categoriaTre = new CategoriaGatto("qualsiasi", "qualsiasi", "img/gatto.png", "qualsiasi lunghezza");
$cardTre = new Card($prodottoTre, $categoriaTre);
echo $cardTre->printCard();


?>