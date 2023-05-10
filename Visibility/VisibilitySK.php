<?php
  class sekolah{
    public $nama;
    public $alamat;
    protected $jumlahsiswa;
    private $jumlahguru;
    private $jumlahkelas;

     public function nama($nama){
      $this->nama = $nama. '<br>';
    }
     public function alamat($alamat){
      $this->alamat = $alamat. '<br>';
    }
     public function jumlahsiswa($jumlahsiswa){
      $this->jumlahsiswa = $jumlahsiswa. '<br>'; 
    }
     public function jumlahguru($jumlahguru){
      $this->jumlahguru = $jumlahguru. '<br>'; 
    }
     public function jumlahkelas($jumlahkelas){
      $this->jumlahkelas = $jumlahkelas. '<br><br>'; 
    }
  }

  class wikrama extends sekolah{
    private $jumlahguru;
    private $jumlahkelas;
    public function tampil(){
      echo 'Selamat datang Di '.$this->nama .'<br>';
      echo 'Alamat : '. $this->alamat.'<br>';
      echo 'Jumlah Siswa :'. $this->jumlahsiswa.'<br>';
    }
    public function jumlahguru($jumlahguru){
      echo 'Jumlah Guru : '.$this->jumlahguru = $jumlahguru .'<br>';
    }
    public function jumlahkelas($jumlahkelas){
      echo 'Jumlah Kelas : '.$this->jumlahkelas = $jumlahkelas. '<br>';
    }

  }

  class wikramagarut extends sekolah{
    private $jumlahguru;
    private $jumlahkelas;
    public function tampil(){
      echo '<br><hr>';
      echo 'Selamat datang Di '.$this->nama .'<br>';
      echo 'Alamat : '. $this->alamat.'<br>';
      echo 'Jumlah Siswa :'. $this->jumlahsiswa.'<br>';
    }
    public function jumlahguru($jumlahguru){
      echo 'Jumlah Guru : '.$this->jumlahguru = $jumlahguru.'<br>';
    }
    public function jumlahkelas($jumlahkelas){
      echo 'Jumlah Kelas : '.$this->jumlahkelas = $jumlahkelas;
    }
  }

  $wikrama = new wikrama();
  $wikrama->nama("Wikrama");
  $wikrama->alamat("Jl.SindangSari");
  $wikrama->jumlahsiswa("100");
  $wikrama->tampil();
  $wikrama->jumlahguru("700");
  echo '<br>';
  $wikrama->jumlahkelas("900");

  $wikramagarut = new wikramagarut();
  $wikramagarut->nama("WikramaGarut");
  $wikramagarut->alamat("Jl.Depok");
  $wikramagarut->jumlahsiswa("980");
  $wikramagarut->tampil();
  $wikramagarut->jumlahguru("124");
  echo '<br>';
  $wikramagarut->jumlahkelas("80");
  
?>