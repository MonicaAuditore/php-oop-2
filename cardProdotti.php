<?php 
require_once __DIR__ . './categorie.php';
require_once __DIR__ . './prodotti.php';

//oggetto ProdottoCibo
$prodottoCibo = new ProdottoCibo('Cibo per cani', 'Cibo completo per cani', 10.99, 'img/cibo-per-cani.jpg', 'secco', '500g');

//oggetto CategoriaCane
$categoriaCane = new CategoriaCane('media', 'adulto', 'icona-cane.png', 'Golden Retriever');

//card del prodotto
echo '<div>';
echo '<img src="">';
echo '<h2>Titolo prodotto</h2>';
echo '<h3>Prezzo</h3>';
echo '<img src="">';
echo '<h4>Tipo articolo</h4>';
echo '</div>';


?>