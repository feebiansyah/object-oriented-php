<?php

class Produk{
	
	public $judul,
				 $penulis,
				 $penerbit,
				 $harga;
				 
	
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	
}

class CetakInfoProduk{
	
	public function cetak (Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (rp.{$produk->harga}) ";
		return $str;
	}
}



$produk1 = new Produk("naruto", "masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("uncharted", "neil durckman", "sony komputer", 2500000);

echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "game : ". $produk2->getLabel();

echo"<br>";

$infoProduk1 = new CetakInfoProduk();

echo $infoProduk1->cetak($produk1);



?>
