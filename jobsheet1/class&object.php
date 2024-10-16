<?php
// Definisi class Mahasiswa
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
// Membuat objek Mahasiswaa
$mahasiswa1 = new Mahasiswa();
// Mengisi nilai atribut
$mahasiswa1->nama = "Ji Rizky Cahyusna";
$mahasiswa1->nim = "109876543";
$mahasiswa1->jurusan = "Sistem Informasi";
echo $mahasiswa1->tampilkanData(); // Menampilkan data mahasiswa
?>
