<?php

class ContohStatic {
  public static $angka = 1;

  public static function hallo() {
    return "hallo ".self::$angka++." kali.";
  }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hallo();
echo "<br>";
echo ContohStatic::hallo();



class Contoh {

  public static $angka = 1;

  public function hallo() {
    return "hallo ".self::$angka++." kali. <br>";
  }

}

echo "<hr>";

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
echo "<br>";
echo "<br>";


$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();



?>