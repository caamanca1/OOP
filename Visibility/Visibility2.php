<?php

  class person{
    public    $nama;
    private   $umur;
    protected $agama;
    private   $gender;

    function nama($nama){
      $this->nama = $nama .'<br>';
    }

    function umur($umur){
      $this->umur = $umur. ' Tahun <br>';
    }
    function agama($agama){
      $this->agama = $agama .'<br>';
    }
    function gender($gender){
      $this->gender = $gender.'<br>';
    }

     function cetak(){
      echo 'Nama Saya : '. $this->nama. 'Umur Saya : '. $this->umur . 'Agama : '. $this->agama. ' Gender : '. $this->gender;
    }
  }


  $Tensa = new person();
  $Tensa->nama('Tensa');
  $Tensa->umur('16');
  $Tensa->agama('GakTahu');
  $Tensa->gender('Laki - Laki');
  $Tensa->cetak();
?>