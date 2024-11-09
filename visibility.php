<?php

class Produk {

  public $judul,
  $penulis,
  $penerbit;

  protected $diskon = 0;

  private $harga;



  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

  echo $diskon;
  }



  public function getHarga() {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {

    $str = " {$this->judul} | {$this->getLabel()} (rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk {

  public $jmlHalaman;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk() {
    $str = "Komik :".parent::getInfoProduk()."- {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {

  public $waktuMain;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }


  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }
  public function getInfoProduk() {
    $str = "Game : ". parent::getInfoProduk() ."~ {$this->waktuMain} jam.";
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak (Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (rp.{$produk->harga}) ";
    return $str;
  }
}


$produk1 = new Komik("naruto", "masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("uncharted", "neil durckman", "sony komputer", 2500000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


//Komik : naruto | masashi Kishimoto, Shounen jump rp(. 300000) - 100 halaman
//game : uncharted | neil durckman, sony komputer rp(2500000) ~ 50 jam

echo("<br>");
echo("<br>");


echo $produk2->setDiskon(90);
echo $produk2->getHarga();

?>