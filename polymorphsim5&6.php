<?php
class Printer {
    public function print(Animal $animasi){
        echo $animal->getName() . " says " . $animasi->makeSound() . "<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

$printer = new Printer();
$printer->print($dog);// Output: Buddy says Woof!
$printer->print($cat);// Output: Kitty says Meow!