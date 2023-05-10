<!-- **Constructor** adalah suatu function khusus yang akan dieksekusi ketika suatu objek dibuat (instansiasi class). Umumnya constructor dibuat untuk memberikan suatu operasi awal yang harus dilakukan ketika sebuah objek dilahirkan (inisialisasi objek).

     **Destructor** adalah function khusus yang dilakukan ketika suatu objek akan dihapus. Umumnya destructor dibuat untuk mengembalikan kembali sumber daya komputer (misalnya memori, file).
                    Contoh operasi dalam destructor menghapus kembali memori yang telah digunakan atau menutup koneksi ke suatu file. -->
<?php
class User {

    private $name = 'Manca';
    private $address = 'Bogor';
    
    public function showBio()
    {
        echo "Nama saya $this->name dan saya berasal dari $this->address";
    }

    // constructor
    public function __construct()
    {
    	echo ' Ini dari konstruktor. <br/> ';
    }

    // destructor
    public function __destruct()
    {
        echo ' Ini dari destruktor.';
    }

}

// membuat object $manca
$manca = new User();

// panggil method dari object $manca
echo $manca->showBio();
echo "<br>";
?>