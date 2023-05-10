<?php

  class permainan{
    //Membuat Properti
    public $nama = 'nama';
    public $harga = 'harga'; 
    public $rating = 'rating';
    public $download = 'download ';

    //METHOD
    public function set_nama($nama){
      $this->nama = $nama;
    }
    public function set_harga($harga){
      $this->harga = $harga;
    }
    public function set_rating($rating){
      $this->rating = $rating;
    }
    public function set_download($download){
      $this->download = $download;
    }
    public function show_hasil(){
      echo ' Nama Permainan Ini adalah : '.$this->nama.' <br/> ';
      echo ' Harga Permainan Ini adalah : 💲'.$this->harga.' <br/> ';
      echo ' Rating Permainan Ini adalah : ⭐'.$this->rating.' <br/> ';
      echo ' Jumlah Download : ⬇️'.$this->download.' <br/> ';
      echo '<button>Main!</button><br>';
    }
  } 
  //OBJECT
  $permainan1 = new permainan; //instansiasi
  $permainan1->set_nama('Call Of Duty');
  $permainan1->set_harga(' 25K');
  $permainan1->set_rating(' 5 Stars');
  $permainan1->set_download('1000k');
  $permainan1->show_hasil();
  echo '<br>';
  $permainan2 = new permainan;
  $permainan2->set_nama('God Hand');
  $permainan2->set_harga(' 55K');
  $permainan2->set_rating(' 3.7 Stars');
  $permainan2->set_download('1000k');
  $permainan2->show_hasil();

?>