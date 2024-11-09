<?php

class Produk{
	
	public $judul,
				 $penulis,
				 $penerbit,
				 $harga;
				 
	
	public function __construct($judul, $penulis, $penerbit, $harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}


	public function getLabel(){
		return "$this->judul, $this->penerbit";
	}
	
}


$produk1 = new Produk("naruto", "masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("uncharted", "neil durckman", "sony komputer", 2500000);

echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "game : ". $produk2->getLabel();



?>
