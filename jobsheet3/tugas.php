<?php
// Definisi class Person sebagai induk
class Person {
    protected $name; // Atribut protected, dapat diakses oleh kelas turunan

    public function __construct($name) {
        $this->name = $name; // Inisialisasi atribut name
    }

    // Metode untuk mengembalikan nilai nama
    public function getName() {
        return $this->name;
    }

    // Metode yang akan di-override oleh subclass untuk Polymorphism
    public function getRole() {
        return "Person";
    }
}

// Definisi Class Dosen, subclass yang mewarisi dari class Person
class Dosen extends Person {
    private $mataKuliah;  // Atribut private, hanya dapat diakses dalam class Dosen
    private $nidn; // Atribut NIDN yang dienkapsulasi

    // Constructor class Dosen, memanggil constructor dari class Person
    public function __construct($name, $mataKuliah, $nidn) {
        parent::__construct($name);
        $this->mataKuliah = $mataKuliah; // Inisialisasi mata kuliah dosen
        $this->nidn = $nidn; // Inisialisasi NIDN dosen
    }

    // Override metode getRole untuk mengembalikan peran dosen
    public function getRole() {
        return "Dosen";
    }

    // Metode untuk mengembalikan mata kuliah yang diajarkan
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Metode untuk mengembalikan NIDN dosen
    public function getNidn() {
        return $this->nidn;
    }
}

// Definisi Class Mahasiswa, subclass yang mewarisi dari class Person
class Mahasiswa extends Person {
    private $nim; // Atribut private, hanya dapat diakses dalam class Mahasiswa
    private $jurusan;  // Atribut jurusan

    // Constructor class Mahasiswa, memanggil constructor dari class Person
    public function __construct($name, $nim, $jurusan) {
        parent::__construct($name);
        $this->nim = $nim; // Inisialisasi NIM mahasiswa
        $this->jurusan = $jurusan; // Inisialisasi jurusan mahasiswa
    }

    // Override metode getRole untuk mengembalikan peran mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }

    // Metode untuk mengembalikan NIM mahasiswa
    public function getNim() {
        return $this->nim;
    }

    // Metode untuk mengembalikan jurusan mahasiswa
    public function getJurusan() {
        return $this->jurusan;
    }
}

// Definisi kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul; // Atribut protected, bisa diakses oleh subclass

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Deklarasi metode abstrak untuk pengelolaan jurnal
    abstract public function getJurnal();
}

// Kelas JurnalDosen mewarisi dari Jurnal
class JurnalDosen extends Jurnal {
    private $dosen;

    public function __construct($judul, $dosen) {
        parent::__construct($judul);
        $this->dosen = $dosen;
    }

    // Implementasi metode kelolaJurnal khusus untuk dosen
    public function getJurnal() {
        return "Jurnal dosen berjudul '$this->judul' sedang dikelola oleh dosen bernama $this->dosen.";
    }
}

// Kelas JurnalMahasiswa mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    private $mahasiswa;

    public function __construct($judul, $mahasiswa) {
        parent::__construct($judul);
        $this->mahasiswa = $mahasiswa;
    }

    // Implementasi metode kelolaJurnal khusus untuk mahasiswa
    public function getJurnal() {
        return "Jurnal mahasiswa berjudul '$this->judul' sedang dikerjakan oleh mahasiswa bernama $this->mahasiswa.";
    }
}

// Membuat objek baru dari class Dosen dan Mahasiswa
$dosen1 = new Dosen("Park Chanyeol", "Bahasa Inggris", "123456789");
$mahasiswa1 = new Mahasiswa("Ji Rizky Cahyusna", "230102063", "Teknik Informatika");

// Menampilkan informasi dosen
echo "Nama: " . $dosen1->getName() . "<br>";
echo "Peran: " . $dosen1->getRole() . "<br>";
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br><br>";

// Menampilkan informasi mahasiswa
echo "Nama: " . $mahasiswa1->getName() . "<br>";
echo "Peran: " . $mahasiswa1->getRole() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br><br>";

// Membuat jurnal dosen dan jurnal mahasiswa
$jurnalDosen = new JurnalDosen("Pengaruh Teknologi terhadap Pendidikan", $dosen1->getName());
$jurnalMahasiswa = new JurnalMahasiswa("Proyek Tugas Akhir AR", $mahasiswa1->getName());

// Menampilkan pengelolaan jurnal
echo $jurnalDosen->getJurnal() . "<br>";
echo $jurnalMahasiswa->getJurnal();
?>
