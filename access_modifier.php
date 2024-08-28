<?php

//PHP - Access Modifiers
//Properties and methods can have access modifiers which control where they can be accessed.

//There are three access modifiers:
//1) public
//2) protected
//3) private



//Access modifier in properties

// class Fruit
// {
//     public $name;
//     protected $color;
//     private $weight;
// }

// $mango = new Fruit();
// $mango->name = 'Mango'; // OK
// echo $mango->name;
// //$mango->color = 'Yellow'; // ERROR
// //$mango->weight = '300'; // ERROR



// ====================================================================================



//Access modifier in functions

// class Fruit
// {
//     public $name;
//     public $name2;
//     public $color;
//     public $weight;

//     function set_name($n)
//     {  // a public function (default)
//         $this->name = $n;
//     }

//     public function set_name2($n)
//     {  // a public function (default)
//         $this->name2 = $n;
//     }

//     protected function set_color($n)
//     { // a protected function
//         $this->color = $n;
//     }
//     private function set_weight($n)
//     { // a private function
//         $this->weight = $n;
//     }
// }

// $mango = new Fruit();
// $mango->set_name('Mango'); // OK
// $mango->set_name2('cyst'); // OK
// //$mango->set_color('Yellow'); // ERROR
// //$mango->set_weight('300'); // ERROR



// ===============================================================================



// Use of private and protected property and function

// //Parent class
// class Fruit
// {
//     public $name;
//     public $color;
//     public $weight;
//     protected $taste = 'sour';
//     private $smell = 'good';

//     function set_name($n)
//     {  // a public function (default)
//         $this->name = $n;
//     }

//     protected function set_color($n)
//     { // a protected function
//         $this->color = $n;
//     }

//     private function set_weight($n)
//     { // a private function
//         $this->weight = $n;
//     }
// }

// // Child class
// class Mango extends Fruit
// {

//     // every function by default public
//     function set__color($n)
//     {
//         // call protected function of parent class
//         $this->set_color($n);
//     }

//     public function set__weight($n)
//     {
//         // call private function of parent class
//         $this->set_weight($n);
//     }

//     public function get__taste()
//     {
//         // use protected property of parent class
//         return $this->taste;
//     }

//     public function get__smell()
//     {
//         // use private property of parent class
//         return $this->smell;
//     }
// }

// //instance of child class
// $mango = new Mango();
// $mango->set_name('Mango'); // OK
// $mango->set__color('red'); // OK

// $taste = $mango->get__taste();
// // $smell = $mango->get__smell(); // ERROR

// //print $taste
// echo "Taste is $taste <br/>";

// //print $smale
// // echo "Smell is {$smell} <br/>"; // WARNING

// //$mango->set__weight('300'); // ERROR

// //print the object
// echo json_encode($mango);
