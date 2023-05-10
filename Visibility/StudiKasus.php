<?php
class Sekolah {
    public $nama;
    protected $alamat;
    protected $jumlah_siswa;
    private $jumlah_guru;
    private $jumlah_kelas;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }
    public function setSiswa($jumlah_siswa) {
        $this->jumlah_siswa = $jumlah_siswa;
    }
    public function setGuru($jumlah_guru) {
        $this->jumlah_guru = $jumlah_guru;
    }
    public function setKelas($jumlah_kelas) {
        $this->jumlah_kelas = $jumlah_kelas;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getAlamat() {
        return $this->alamat;
    }
    public function getSiswa() {
        return $this->jumlah_siswa;
    }
    public function getGuru() {
        return $this->jumlah_guru;
    }
    public function getKelas() {
        return $this->jumlah_kelas;
    }
    public function getInfo() {
        echo "Nama Sekolah: " . $this->getNama() . "<br>";
        echo "Alamat Sekolah: " . $this->getAlamat() . "<br>";
        echo "Jumlah Siswa: " . $this->getSiswa() . "<br>";
        echo "Jumlah Guru: " . $this->getGuru() . "<br>";
        echo "Jumlah Kelas: " . $this->getKelas() . "<br>";
    }
}

class Wikrama extends Sekolah {
    public function __construct() {
        $this->setNama("SMK Wikrama Bogor");
        $this->setAlamat("Jl.Raya Wangun");
        $this->setSiswa(1800);
        $this->setGuru(110);
        $this->setKelas(60);
    }
}

$wikrama = new Wikrama();

echo "<h2>Sekolah Information:</h2>";
$wikrama->getInfo();

class WikramaGarut extends Sekolah{
        public function __construct() {
        $this->setNama("SMK Wikrama Gaurt");
        $this->setAlamat("Jl.Raya Wangun");
        $this->setSiswa(1800);
        $this->setGuru(110);
        $this->setKelas(60);
    }
}


?>
