<?php
// Definisi Class Pengguna, class induk
class Pengguna {
    // Atribut protected, hanya dapat diakses oleh class ini dan turunan 
    protected $nama;
    // Constructor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama = $nama;
    }
    // Metode getter untuk mengembalikan nilai atribut nama
    public function getNama() {
        return $this->nama;
    }
}
// Definisi Class Dosen, subclass yang mewarisi dari class Pengguna
class Dosen Extends Pengguna {
    private $mataKuliah;  // Atribut private, hanya dapat diakses dalam class Dosen
    // Constructor class Dosen, memanggil constructor dari class Pengguna
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah; // Inisialisasi mata kuliah dosen
    }
    // Metode getter untuk mengembalikan nilai atribut mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}
// Membuat objek baru dari class Dosen
$dosen1 = new Dosen("Park Chanyeol", "Bahasa Inggris");
// Menampilkan nama dosen dengan memanggil metode getNama dari class Pengguna
echo $dosen1->getNama(). "<br>"; // Output: Park Chanyeol
// Menampilkan mata kuliah dosen dengan memanggil metode getMataKuliah dari class Dosen
echo $dosen1->getMataKuliah(); // Output: Bahasa Inggris
?>