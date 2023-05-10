<?php
class Mobil //Membuat Class
{
  //PROPERTY
  public $warna;
  public $nama;
  public $merk;
  public $kecepatan;

  // METHOD declaration

  public function InputDataMobil($kondisi, $merk, $nama, $warna, $kecepatan){
    echo 'Kondisi Mobil : ' . $kondisi;
    echo '<br>';
    echo 'Merk Mobil : ' . $merk;
    echo '<br>';
    echo 'Nama Mobil : ' . $nama;
    echo '<br>';
    echo 'Warna Mobil : ' . $warna;
    echo '<br>';
    echo 'Kecepatan Mobil : ' . $kecepatan;
    echo '<br> ==================================== <br>';
  }
 
}
//OBJECT 
$Toyota   = new Mobil();
$Toyota -> InputDataMobil("Maju", "Toyota", "Fortuner", "Hitam", "250");

$Honda = new Mobil();
$Honda -> InputDataMobil("Mundur", "Honda", "Brio", "Hijau", "100");
?>
