<?php
// Definisi class Person
class Person {
    protected $name; // Atribut protected, hanya dapat diakses oleh class ini dan turunan 
    // Constructor untuk menginisialisasi atribut
    public function __construct($name){
        $this->name = $name;
    } 
    // Metode getter untuk mengembalikan nilai atribut name
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
}

// Membuat objek baru dari class Student
$student1 = new Student ("Ji Rizky Cahyusna", "230987654");
// Menampilkan name student dengan memanggil metode getName dari class Person
echo $student1->getName(). "<br>"; // Output: Ji Rizky Cahyusna
// Menampilkan studentID dengan memanggil metode getStudentID dari class Person
echo $student1->getStudentID(); // Output: 230987654
?>