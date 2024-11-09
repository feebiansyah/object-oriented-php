<?php

class Produk{
  
  public $judul = "judul",
  			 $penulis = "penulis",
  			 $penerbit = "penerbit",
  			 $harga = "harga";
  
}


/*
$produk1 = new Produk();
$produk1->judul = "naruto";
var_dump($produk1);

echo "<br>";
echo("<br>");

$produk2 = new Produk();
$produk2 ->judul = "uncharted";
var_dump($produk2);
*/

$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi Kishimoto";
$produk3->penerbit = "shounen jump";
$produk3->harga = 30000;
var_dump($produk3);
echo("<br>");
echo "komik : $produk3->judul, $produk3->penerbit";

 
