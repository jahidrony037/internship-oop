<?php

// Inheritance in OOP = When a class derives from another class.

// 1) The child class will inherit all the public and protected properties and 
// methods from the parent class. In addition, it can have its own properties and methods.

// 2) An inherited class is defined by using the extends keyword.



// Parent class
// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry?";
//     }
// }

// // create instance of child class
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();





// ==============================================================================



// Inheritance and the Protected Access Modifier

// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//         // Call protected method from within derived class - OK
//         $this->intro();
//     }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() 
// // (which is protected) from within the derived class

// // $strawberry->intro(); // ERROR






// ============================================================================================

// Overriding Inherited Methods


// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public $weight;
//     public function __construct($name, $color, $weight)
//     {
//         // parent::__construct($name, $color);
//         $this->name = $name;
//         $this->color = $color;
//         $this->weight = $weight;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name}, 
//         the color is {$this->color}, and the weight is {$this->weight} gram.";
//     }
// }

// $strawberry = new Strawberry("Strawberry", "red", 50);
// $strawberry->intro();





// ===============================================================================


// Use of final Keyword in class

// final class Fruit
// {
//     // some code
// }

// // will result in error
// class Strawberry extends Fruit
// {
//     // some code
// }



// ===============================================================================



// Use of final Keyword in class method

// class Fruit
// {
//     final public function intro()
//     {
//         echo 'Intro';
//     }
// }

// class Strawberry extends Fruit
// {
    // will result in error
    // public function intro()
    // {
    //     // body
    //     // echo "Strawberry form Child Class";
    // }

    // public function introduction()
    // {
    //     $this->intro();
    // }
// }

// $strawberry = new Strawberry();

// $strawberry->intro();
// $strawberry->introduction();


// practice by myself
// class Animal {
//     public function __construct($name, $color){
//         $this->name=$name;
//         $this->color=$color;
//     }

//     protected function eat($food){
//         $this->food=$food;
//     }

//     function show(){
//         echo "This is {$this->name} his favorite food is {$this->food} and the color of {$this->name} is {$this->color}";
//     }
// }

// class Dog extends Animal{
//     public function eatFood($food){
//         $this->eat($food);
//     }
// }

// $dog = new Dog("Dog", "Black");
// $dog->eatFood("Hotdog");
// $dog->show();
// echo"<br>";
// $cat = new Dog("Cat", "White");
// $cat->eatFood("Fish");
// $cat->show();

