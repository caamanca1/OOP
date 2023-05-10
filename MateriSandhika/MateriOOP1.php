<?php
  class Produk{
    public 
    $judul = "judul", 
    $penulis = "penulis", 
    $penerbit = "penerbit", 
    $harga = "0";

    public function sayHello(){
      return "Hello World!";
    }

    public function getLabel(){
      return "$this->penulis, $this->penerbit";
    }
  }

  // $produk1 = new Produk();
  // $produk1 ->judul = "Naruto";
  // var_dump($produk1);  

  // echo "<br><br>";

  // $produk2 = new Produk();
  // $produk2 ->judul = "Uncharted";
  // var_dump($produk2->judul);

  $produk3 = new Produk();
  $produk3->judul = "Naruto";
  $produk3->penulis = "Masashi Kishimoto";
  $produk3->penerbit = "Shonen Jump";
  $produk3->harga = "55000";
  var_dump($produk3);
  echo "<br><br>";
  echo "Komik : $produk3->judul <br>Penulis : $produk3->penulis <br> Penerbit : $produk3->penerbit";
  echo " <br> <br> <br>";
  echo $produk3->sayHello();
  echo " <br> <br> <br>";
  echo $produk3->getLabel();
?>