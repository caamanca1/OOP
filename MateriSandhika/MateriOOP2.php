<?php
/** contoh kelas **/
class kendaraan{
/*** property class ***/
public $warna;
public $harga;
public $merk;
/*** method class ***/
public function construct(){
echo 'Ini adalah Object Kendaraan. <br />';
}
public function set_warna($warna){
  $this->warna = $warna;
}
public function set_harga($harga){
$this->harga = $harga;
}
public function set_merk($merk){
  $this->merk = $merk;
}
public function show_harga(){
echo 'Merk Kendaraan : '.$this ->merk.'. <br/>';
echo 'Warna Kendaraan : '.$this->warna.'. <br/>';
echo 'Harga Kendaraan : Rp.'.$this->harga.'. <br />';
}

public function jalan(){
echo 'Brrroooooom!!!';
}
}
/*** end of class ***/
/** contoh object **/
/** mengcreate object $saya_adalah_object dari class kendaraan **/
$saya_adalah_object = new kendaraan;
$saya_adalah_object->set_merk('Toyota');
$saya_adalah_object->set_warna('Biru');
$saya_adalah_object->set_harga(100000);
$saya_adalah_object->show_harga();
$saya_adalah_object->jalan();
echo " <br><br> <button>BELI</button> ";
?>
