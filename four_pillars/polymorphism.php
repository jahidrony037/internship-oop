<?php

//polymorphism is a concept that allows objects of different classes to be treated as objects
//of a common superclass. This is possible through method overriding or interfaces, where different
//classes can implement the same method but with different behaviors.



class Animal {
    public function makeSound() {
        echo "Some sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat Bark";
    }
}

$dog = new Dog();
$dog->makeSound(); // Outputs: Bark
echo "<br/>";

$cat = new Cat();
$cat->makeSound(); // Outputs: Some sound



//=======================================================================================

// polymorphism with abstract class

//abstract class Animal {
//    abstract public function makeSound();
//}
//
//class Dog extends Animal {
//    public function makeSound() {
//        echo "Bark";
//    }
//}
//
//class Cat extends Animal {
//    public function makeSound() {
//        echo "Meow";
//    }
//}
//
//function animalSound(Animal $animal) {
//    $animal->makeSound();
//}
//
//animalSound(new Dog()); // Outputs: Bark
//echo "<br/>";
//animalSound(new Cat()); // Outputs: Meow
