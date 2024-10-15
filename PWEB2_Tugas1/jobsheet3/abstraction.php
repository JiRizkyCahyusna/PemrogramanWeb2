<?php
// Definisi kelas abstrak Course
abstract class Course {
    // Metode abstrak yang harus diimplementasikan oleh subclass
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    // Mengimplementasikan metode getCourseDetails untuk kursus online
    public function getCourseDetails() {
        return "Kursus Online: Bahasa Inggris yang memiliki kode B02 tersedia di platform Zoom.";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    // Mengimplementasikan metode getCourseDetails untuk kursus offline
    public function getCourseDetails() {
        return "Kursus Offline: Bahasa Mandarin yang memiliki kode M21 tersedia di Ruang 15, Gedung B.";
    }
}

// Membuat objek baru dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse();
$offlineCourse = new OfflineCourse();

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails(). ""; 
?>
