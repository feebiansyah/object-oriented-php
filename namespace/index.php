<?php

require_once('App/init.php');

$produk1 = new Komik("naruto", "masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("uncharted", "neil durckman", "sony komputer", 2500000, 50);

$produkCetak = new CetakInfoProduk;
$produkCetak->tambahProduk($produk1);
$produkCetak->tambahProduk($produk2);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

