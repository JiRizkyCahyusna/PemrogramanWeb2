<?php
// Definisi Class Mahasiswa
class Mahasiswa {
    // Atribut publik yang menyimpan informasi mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
    // Constructor untuk menginisialisasi objek Mahasiswa 
    public function __construct($nama, $nim, $jurusan){
        // Inisialisasi atribut kelas dengan nilai yang diberikan pada saat pembuatan objek
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Mahasiswa atas nama $this->nama, dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
    // Metode untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusan_baru) {
        // Mengubah nilai atribut jurusan dengan jurusan yang baru
        $this->jurusan = $jurusan_baru;
    }
    // Metode untuk mengubah nilai NIM mahasiswa
    public function setNIM($nim_baru) {
         // Mengubah nilai atribut nim dengan nim yang baru
        $this->nim = $nim_baru;
    }
}
// Membuat objek mahasiswa baru dengan nama, NIM, dan jurusan awal
$mahasiswa1 = new Mahasiswa("Ji Rizky Cahyusna", "109876543", "Sistem Informasi");

// Tampilkan data mahasiswa awal
echo "<b>Data Mahasiswa Awal:</b><br>";
echo $mahasiswa1->tampilkanData() . "<br>"; // Menampilkan data mahasiswa awal yang belum diperbarui

// Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("Teknik Informatika");

// Mengubah NIM mahasiswa menggunakan metode setNIM
$mahasiswa1->setNIM("230102063");

// Tampilkan data mahasiswa yang sudah diperbarui
echo "<b><br>Data Mahasiswa Setelah Pembaruan:</b><br>";
echo $mahasiswa1->tampilkanData(); // Menampilkan data mahasiswa yang sudah diperbarui
?>