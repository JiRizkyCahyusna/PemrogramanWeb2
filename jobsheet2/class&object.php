<?php
// Definisi Class Mahasiswa
class Mahasiswa {
    // Atribut publik yang menyimpan informasi mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Mahasiswa atas nama $this->nama, dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
}
// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa();
// Mengisi nilai atribut
$mahasiswa1->nama = "Ji Rizky Cahyusna";
$mahasiswa1->nim = "230102063";
$mahasiswa1->jurusan = "Komputer dan Bisnis";
echo $mahasiswa1->tampilkanData(); // Menampilkan data mahasiswa
?>