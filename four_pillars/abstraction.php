<?php

//Abstraction

//Abstraction is the process of hiding the complex implementation details and showing only the
//essential features of an object. This is usually done by creating abstract classes or interfaces in PHP.
//Abstract classes cannot be instantiated directly and can have both abstract methods
//(which do not have a body) and concrete methods.


// So, when a child class is inherited from an abstract class, we have the 
// following rules:

// 1) The child class method must be defined with the same name and it redeclares the parent
//  abstract method.
// 2) Abstract method must be public or protected.
// 3) The child class method must be defined with the same or a less restricted access
//  modifier
// 4) The number of required arguments must be the same. However, the child class may
//  have optional arguments in addition


// example one

// abstract class
abstract class Animal
{
    abstract protected function makeSound();

    public function sleep()
    {
        echo "Sleeping...\n";
    }

    public function sound()
    {
        echo "{$this->makeSound()} <br/>";
    }
}

//access abstract class method

// child class of abstract class
class Dog extends Animal
{
    public function makeSound()
    {
        return "Bark!";
    }
}

(new Dog())->sound();
(new Dog())->sound();
(new Dog())->sleep();


// =============================================================================



// example two (abstract class in details) (hide complex part)

// // Parent class
// abstract class Car
// {
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     abstract public function intro(): string;
//     // abstract public function get_color();

//     public function getIntro()
//     {
//         return "{$this->intro()} <br/>";
//     }
// }

// // Child classes
// class Audi extends Car
// {
//     public function intro(): string
//     {
//         return "Choose German quality! I'm an $this->name!";
//     }
// }

// class Volvo extends Car
// {
//     public function intro(): string
//     {
//         return "Proud to be Swedish! I'm a $this->name!";
//     }
// }

// class Citroen extends Car
// {
//     public function intro(): string
//     {
//         return "French extravagance! I'm a $this->name!";
//     }
// }

// // Create objects from the child classes
// $audi = new audi("Audi");
// echo $audi->getIntro();

// $volvo = new volvo("Volvo");
// echo $volvo->getIntro();

// $citroen = new citroen("Citroen");
// echo $citroen->getIntro();



// =============================================================================



// abstract method with argument:

// abstract class ParentClass
// {
//     // Abstract method with an argument
//     abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass
// {
//     public function prefixName($name)
//     {
//         if ($name == "John Doe") {
//             $prefix = "Mr.";
//         } elseif ($name == "Jane Doe") {
//             $prefix = "Mrs.";
//         } else {
//             $prefix = "";
//         }
//         return "{$prefix} {$name}";
//     }
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>";
// echo $class->prefixName("Jane Doe");
