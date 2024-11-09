<?php

class Produk {

  public $judul,
  $penulis,
  $penerbit,
  $harga,
  $jmlHalaman,
  $waktuMain;


  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;

  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {

    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk {
  public function getInfoProduk() {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public function getInfoProduk() {
    $str = "Game : {$this->judul} | {$this->getLabel()} (rp. {$this->harga}) - {$this->waktuMain} jam.";
    return $str;
  }
}


class CetakInfoProduk {
  public function cetak (Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (rp.{$produk->harga}) ";
    return $str;
  }
}


$produk1 = new Komik("naruto", "masashi Kishimoto", "Shounen Jump", 30000, 100, 0,);
$produk2 = new Game("uncharted", "neil durckman", "sony komputer", 2500000, 0, 50,);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


//Komik : naruto | masashi Kishimoto, Shounen jump rp(. 300000) - 100 halaman
//game : uncharted | neil durckman, sony komputer rp(2500000) ~ 50 jam

?>