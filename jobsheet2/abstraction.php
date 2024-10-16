<?php
// Definisi Class Pengguna, class induk (abstrak)
abstract class Pengguna {
    // Atribut protected, hanya dapat diakses oleh class ini dan turunan 
    protected $nama;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur yang merupakan metode abstrak
    abstract function aksesFitur();
}

// Definisi Class Dosen, subclass yang mewarisi dari class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;  // Atribut private, hanya dapat diakses dalam class Dosen
    
    // Constructor class Dosen, memanggil constructor dari class Pengguna
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah; // Inisialisasi mata kuliah dosen
    }

    // Mengoverride metode aksesFitur khusus untuk dosen
    public function aksesFitur() {
        return "Dosen atas nama " . $this->nama . " mengelola mata kuliah " . $this->mataKuliah . 
               " dan memiliki akses untuk memberikan tugas.<br>";
    }
}

// Definisi Class Mahasiswa, subclass yang mewarisi dari class Pengguna
class Mahasiswa extends Pengguna {
    // Atribut private, hanya dapat diakses dalam class Mahasiswa
    private $nim;
    private $jurusan;  

    // Constructor class Mahasiswa, memanggil constructor dari class Pengguna
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim; // Inisialisasi nim mahasiswa
        $this->jurusan = $jurusan; // Inisialisasi jurusan mahasiswa
    }

    // Mengoverride metode aksesFitur khusus untuk mahasiswa
    public function aksesFitur() {
        return "Mahasiswa atas nama " . $this->nama . ", dengan NIM " . $this->nim . " dari jurusan " . $this->jurusan . 
               ". Memiliki akses untuk mengikuti perkuliahan dan melihat nilai.";
    }
}

// Membuat objek baru dari class Dosen dan Mahasiswa
$dosen1 = new Dosen("Park Chanyeol", "Bahasa Inggris");
$mahasiswa1 = new Mahasiswa("Ji Rizky Cahyusna", "230102063", "Teknik Informatika");

// Menampilkan akses fitur untuk dosen
echo $dosen1->aksesFitur(); // Output: Dosen atas nama Park Chanyeol mengelola mata kuliah Bahasa Inggris dan memiliki akses untuk memberikan tugas.

// Menampilkan akses fitur untuk mahasiswa
echo $mahasiswa1->aksesFitur(); // Output: Mahasiswa atas nama Ji Rizky Cahyusna, dengan NIM 230102063 dari jurusan Teknik Informatika. Memiliki akses untuk mengikuti perkuliahan dan melihat nilai.
?>
