<!-- # Inheritance

Inheritance (Pewarisan)
1. Pewarisan/Penurunan merupakan fitur OOP yang sangat berguna. 
Dengan pewarisan, sebuah class dapat diturunkan menjadi class baru yang mempunyai sebagian atau seluruh karakteristik dari class parentnya. 
2. Pewarisan dilakukan dengan keyword **extends** 
3. Visibility member berlaku di pewarisan.
4. Dalam pewarisan dikenal istilah **Override** yaitu mendefinisikan ulang suatu function yang telah tersedia di class **child** sehingga mempunyai perilaku yang berbeda dari perilaku function class **parent**nya.
5. Dalam class turunan, boleh ditambah properti atau member baru. -->

<?php
class Orang{
	protected $nama;
	function __construct($nama){
		$this->nama=$nama;
	}
	function UcapSalam(){
		echo "Hallo. Nama Saya adalah ".$this->nama."<br>";
	}
}

// Pewarisan tanpa perubahan
class OrangSunda extends Orang{
}
// Pewarisan dengan meng-override function UcapSalam
// dan Penambahan Method
class OrangInggris extends Orang{
	protected $asal="England"; // penambahan properti baru
	function UcapSalam(){
		echo "Hello. My name is ".$this->nama."<br>";
	}
	function UcapNegara(){ // penambahan method baru
		echo "I'm from ".$this->asal."<br>";
	}
}
$kabayan=new OrangSunda("Kabayan");
$kabayan->UcapSalam();
$william=new OrangInggris("Prince William");
$william->UcapSalam();
$william->UcapNegara();
?>