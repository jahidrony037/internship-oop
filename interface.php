<?php

// Interfaces allow you to specify what methods a class should implement.

// Interfaces make it easy to use a variety of different classes in the same way.
// When one or more classes use the same interface, it is referred to as "polymorphism".


//Interfaces vs. Abstract Classes

//1) Interfaces cannot have properties, while abstract classes can
//2) All interface methods must be public, while abstract class methods is public or protected
//3) All methods in an interface are abstract, so they cannot be implemented in code and the abstract
// keyword is not necessary
//4) Classes can implement an interface while inheriting from another class at the same time


// implementation of interface

// Interface definition
interface Animal
{
    public function makeSound();
}

// Class definitions
class Cat implements Animal
{
    public function makeSound()
    {
        echo "Cat Sound <br/>";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Dog Sound <br/>";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo "Mouse Sound <br/>";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
}




// ======================================================================




// extends from parent class and use Interface together

// interface Animal
// {
//     public function makeSound();
// }

// // Parent class
// class ParentClass {
//     public function parentFn() {
//         echo 'echo from parent class';
//     }
// }

// // Class definitions
// class Cat extends ParentClass implements Animal
// {
//     public function makeSound()
//     {
//         echo "Cat Sound <br/>";
//     }
// }

// // Create a list of animals
// $cat = new Cat();
// $cat->makeSound();
// $cat->parentFn();