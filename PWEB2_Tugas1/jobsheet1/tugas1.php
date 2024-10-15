<?php
// Definisi Class Dosen
class Dosen {
    // Atribut publik yang menyimpan informasi Dosen
    public $nama;
    public $nip;
    public $mataKuliah;
    // Constructor untuk menginisialisasi objek Dosen
    public function __construct($nama, $nip, $mataKuliah){
        // Inisialisasi atribut kelas dengan nilai yang diberikan pada saat pembuatan objek
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    // Metode untuk menampilkan data Dosen
    public function tampilkanDosen() {
        // Mengembalikan string yang berisi informasi dosen
        return "Dosen atas nama $this->nama, dengan NIP $this->nip mengajar Mata Kuliah $this->mataKuliah.";
    }
}
// Membuat objek dosen baru dengan nama, nip, Matakuliah 
$dosen1 = new Dosen ("Alya Triyana", "1987654", "Alpro");
echo $dosen1->tampilkanDosen();  // Menampilkan data dosen
?>