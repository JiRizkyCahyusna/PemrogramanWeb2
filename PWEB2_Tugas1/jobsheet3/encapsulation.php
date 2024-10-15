<?php
// Definisi Class Student
class Student {
    // Atribut private yang menyimpan informasi student
    private $name;
    private $studentID;
    // Constructor untuk menginisialisasi objek student 
    public function __construct($name, $studentID) {
        // Inisialisasi atribut kelas dengan nilai yang diberikan pada saat pembuatan objek
        $this->name = $name;
        $this->studentID = $studentID;
    }
    // Metode Getter untuk mengambil nilai atribut name
    public function getName() {
        return $this->name;
    }
    // Metode Setter untuk mengubah nilai atribut name
    public function setName($name) {
        $this->name = $name;
    }
    // Metode Getter untuk mengambil nilai atribut StudentID
    public function getStudentID() {
        return $this->studentID;
    }
    // Metode Setter untuk mengubah nilai atribut StudentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}
$student1 = new student("Ji Rizky Cahyusna", "230102063", "Komputer dan Bisnis");
// Tampilkan data student awal
echo "Data Student Awal:<br>";
echo "Name: " . $student1->getName() . "<br>"; 
echo "StudentID: " . $student1->getStudentID() . "<br>"; 

// Mengubah atribut name, StudentID menggunakan setter
$student1->setName("Ibnu Zaki");
$student1->setStudentID("240304011");
// Tampilkan data student yang sudah diperbarui
echo "<br>Data Student Setelah Pembaruan:<br>";
echo "Name: " . $student1->getName() . "<br>"; 
echo "StudentID: " . $student1->getStudentID() . "<br>"; 
?>