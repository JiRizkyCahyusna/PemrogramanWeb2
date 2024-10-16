<?php
// Definisi Class Person, class induk
class Person {
    protected $name; // Atribut protected, hanya dapat diakses oleh class ini dan turunan 
    // Constructor untuk menginisialisasi atribut
    public function __construct($name){
        $this->name = $name;
    }
    // Metode getName yang akan di-override oleh subclass
    public function getName() {
        return $this->name;
    }
}
// Definisi Class Student, subclass yang mewarisi dari class Person
class Student extends Person {
    private $studentID; // Atribut private, hanya dapat diakses dalam class Student
    // Constructor class Student, memanggil constructor dari class Person
    public function __construct($name, $studentID){
        parent::__construct($name); 
        $this->studentID = $studentID; // Inisialisasi studentID Student
    }
    // Metode getter untuk mengembalikan nilai atribut StudentID
    public function getStudentID() {
        return $this->studentID;
    }
    // Metode getName yang akan di-override oleh subclass
    public function getName() {
        return "Student atas nama " . $this->name . ", dengan NIM " . $this->studentID;
    }
}
// Definisi Class Teacher, subclass yang mewarisi dari class Person
class Teacher extends Person {
    private $teacherID; // Atribut private, hanya dapat diakses dalam class Teacher
    // Constructor class Teacher, memanggil constructor dari class Person
    public function __construct($name, $teacherID){
        parent::__construct($name); 
        $this->teacherID = $teacherID; // Inisialisasi teacherID teacher
    }
    // Metode getter untuk mengembalikan nilai atribut TeacherID
    public function getTeacherID() {
        return $this->teacherID;
    }
    // Mengoverride metode getName untuk Teacher
    public function getName() {
        return "Dosen yang bernama " . $this->name . " memiliki NIP " . $this->teacherID;
    }
}
// Membuat objek baru dari class Student dan Teacher
$student1 = new Student ("Ji Rizky Cahyusna", "230987654");
$teacher1 = new Teacher ("Salsabilla", "192093845");
echo $student1->getName(). "<br>"; // Menampilkan informasi student dengan memanggil metode getName
echo $teacher1->getName(); // Menampilkan informasi teacher dengan memanggil metode getName
?>