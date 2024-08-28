<?php

//Traits

//PHP only supports single inheritance: a child class can inherit only from one single parent.

//Traits are used to declare methods that can be used in multiple classes. Traits can have methods
//and abstract methods that can be used in multiple classes, and the methods can have any access
//modifier (public, private, or protected).


// trait syntax

trait TraitName
{
    // some code...
}


// use trait in a class

class MyClass
{
    use TraitName;
}




//=======================================================================================




// use of trait

// trait message1
// {
//     public function msg1()
//     {
//         echo "OOP is fun! ";
//     }
// }

// trait message2
// {
//     public function msg2()
//     {
//         echo "OOP reduces code duplication!";
//     }
// }

// class Welcome
// {
//     use message1;
// }

// class Welcome2
// {
//     use message1, message2;
// }

// $obj = new Welcome();
// $obj->msg1();
// echo "<br>";

// $obj2 = new Welcome2();
// $obj2->msg1();
// $obj2->msg2();





//==================================================================================




// use of this in trait

// trait message1
// {
//     public function msg1()
//     {
//         echo "OOP is fun! ";
//     }
// }

// trait message2
// {
//     public function msg2()
//     {
//         echo "OOP reduces code duplication!";
//     }

//     public function classMethod()
//     {
//         // access class method through *this*
//         $this->localMethod();
//     }
// }

// class Welcome
// {
//     use message1, message2;

//     public function localMethod()
//     {
//         echo "<br/> echo from welcome localMethod";
//     }
// }

// class Welcome2
// {
//     use message1, message2;

//     public function localMethod()
//     {
//         echo "<br/> echo from welcome2 localMethod";
//     }
// }

// $obj = new Welcome();
// $obj->msg1();
// $obj->classMethod();
// echo "<br>";

// $obj2 = new Welcome2();
// $obj2->msg1();
// $obj2->msg2();
// $obj2->classMethod();
