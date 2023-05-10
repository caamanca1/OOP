<?php

  class person{
    public      $nama;
    private     $umur;
    protected   $agama;
    protected   $gender;

    function nama($nama){
      $this->nama = $nama .'<br>';
    }
    function umur($umur){
      echo 'Umur saya : '. $this->umur = $umur. ' Tahun <br>';
    }
    function agama($agama){
      $this->agama = $agama .'<br>';
    }
    function gender($gender){
      $this->gender = $gender.'<br>';
    }

    function cetak(){
      echo 'Nama Saya : '. $this->nama. 'Agama : '. $this->agama. ' Gender : '. $this->gender;
    }

  }
  
  class Tensa extends person{
    protected $hobi = 'Mancing <br>';
    protected $sekolah;
    function cetak(){
      echo 'Nama Saya : '. $this->nama. 'Agama : '. $this->agama. ' Gender : '. $this->gender. 'Hobi : '. $this->hobi. 'Saya sekolah di : '. $this->sekolah;
    }
    function sekolah($sekolah){
      $this->sekolah = $sekolah.'<br>';
    }
  }

  class Louis extends person{
    protected $hobi = 'Taekwondo <br>';

    protected $sekolah;

    function cetak(){
      echo 'Nama Saya : '. 'Agama : '. $this->agama. ' Gender : '. $this->gender. 'Hobi : '. $this->hobi. 'Saya sekolah di : '. $this->sekolah;
    }
    function sekolah($sekolah){
      $this->sekolah = $sekolah.'<br>';
    }
  }


  $Tensa = new Tensa();
  $Tensa->nama('Tensa');
  $Tensa->umur('16');
  $Tensa->agama('Islam');
  $Tensa->gender('Laki - Laki');
  $Tensa->sekolah('SMK Wikrama Bogor');
  $Tensa->cetak();
  echo '<br>';
  $Louis = new Louis();
  $Louis->nama('Louis');
  $Louis->umur('16');
  $Louis->agama('Katholik');
  $Louis->gender('Laki - Laki');
  $Louis->sekolah('SMK Wikrama Bogor');
  $Louis->cetak();
?>