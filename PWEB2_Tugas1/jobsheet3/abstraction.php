<?php
// Definisi kelas abstrak Course
abstract class Course {
    protected $courseName; // Nama mata kuliah
    protected $courseCode; // Kode mata kuliah

    // Constructor untuk menginisialisasi atribut
    public function __construct($courseName, $courseCode) {
        $this->courseName = $courseName;
        $this->courseCode = $courseCode;
    }

    // Metode abstrak yang harus diimplementasikan oleh subclass
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform; // Platform untuk kursus online

    // Constructor untuk menginisialisasi atribut OnlineCourse
    public function __construct($courseName, $courseCode, $platform) {
        parent::__construct($courseName, $courseCode);
        $this->platform = $platform; // Inisialisasi platform
    }

    // Mengimplementasikan metode getCourseDetails untuk kursus online
    public function getCourseDetails() {
        return "Kursus Online: " . $this->courseName . " (Kode: " . $this->courseCode . ") tersedia di platform " . $this->platform . ".";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $location; // Lokasi untuk kursus offline

    // Constructor untuk menginisialisasi atribut OfflineCourse
    public function __construct($courseName, $courseCode, $location) {
        parent::__construct($courseName, $courseCode);
        $this->location = $location; // Inisialisasi lokasi
    }

    // Mengimplementasikan metode getCourseDetails untuk kursus offline
    public function getCourseDetails() {
        return "Kursus Offline: " . $this->courseName . " (Kode: " . $this->courseCode . ") akan diadakan di " . $this->location . ".";
    }
}

// Membuat objek baru dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("Pemrograman Web", "PW101", "Zoom");
$offlineCourse = new OfflineCourse("Basis Data", "BD101", "Ruang 101, Gedung A");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Kursus Online: Pemrograman Web (Kode: PW101) tersedia di platform Zoom.
echo $offlineCourse->getCourseDetails(); // Output: Kursus Offline: Basis Data (Kode: BD101) akan diadakan di Ruang 101, Gedung A.
?>
