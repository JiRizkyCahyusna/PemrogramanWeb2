<?php
// Definisi Class Mahasiswa
class Mahasiswa {
    // Atribut private yang menyimpan informasi mahasiswa
    private $nama;
    private $nim;
    private $jurusan;
    // Constructor untuk menginisialisasi objek Mahasiswa 
    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi atribut kelas dengan nilai yang diberikan pada saat pembuatan objek
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // Metode Getter untuk mengambil nilai atribut nama
    public function getNama() {
        return $this->nama;
    }
    // Metode Setter untuk mengubah nilai atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
    // Metode Getter untuk mengambil nilai atribut nim
    public function getNim() {
        return $this->nim;
    }
    // Metode Setter untuk mengubah nilai atribut nim
    public function setNim($nim) {
        $this->nim = $nim;
    }
    // Metode Getter untuk mengambil nilai atribut jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    // Metode Setter untuk mengubah nilai atribut jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
$mahasiswa1 = new Mahasiswa("Ji Rizky Cahyusna", "230102063", "Komputer dan Bisnis");
// Tampilkan data mahasiswa awal
echo "Data Mahasiswa Awal:<br>";
echo "Nama: " . $mahasiswa1->getNama() . "<br>"; 
echo "Nim: " . $mahasiswa1->getNim() . "<br>"; 
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>"; 

// Mengubah atribut nama, nim, dan jurusan menggunakan setter
$mahasiswa1->setNama("Ibnu Zaki");
$mahasiswa1->setNIM("240304011");
$mahasiswa1->setJurusan("Rekayasa Elektronika dan Mekatronika");
// Tampilkan data mahasiswa yang sudah diperbarui
echo "<br>Data Mahasiswa Setelah Pembaruan:<br>";
echo "Nama: " . $mahasiswa1->getNama() . "<br>"; 
echo "Nim: " . $mahasiswa1->getNim() . "<br>"; 
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>"; 
?>