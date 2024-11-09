<?php

class Produk{
	
	public $judul,
				 $penulis,
				 $penerbit,
				 $harga,
				 $jmlHalaman,
				 $waktuMain,
				 $tipe;
				 
	
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
		
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	
	public function getInfoLengkap() {

//Komik : naruto | masashi Kishimoto, Shounen jump rp(. 300000) - 100 halaman
		
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (rp. {$this->harga})" ;
	
		
		return $str;
		
	}
	
}

class CetakInfoProduk{
	
	public function cetak (Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (rp.{$produk->harga}) ";
		return $str;
	}
}


$produk1 = new Produk("naruto", "masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("uncharted", "neil durckman", "sony komputer", 2500000, 0, 50, "game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



//Komik : naruto | masashi Kishimoto, Shounen jump rp(. 300000) - 100 halaman
//game : uncharted | neil durckman, sony komputer rp(2500000) ~ 50 jam

?>
