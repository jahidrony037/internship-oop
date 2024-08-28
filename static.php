<?php

// Static properties and methods can be called directly - without creating an instance of the class first.
// Static properties are declared with the static keyword



// static property declared and access the properties

class pi
{
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;



//==============================================================================



// access static properties and methods from non-static method

// class pi
// {
//     public static $value = 3.14159;

//     public static function welcome()
//     {
//         echo "Hello World! <br/>";
//     }

//     public function staticValue()
//     {
//         return self::$value;
//     }

//     public function useStatic()
//     {
//         self::welcome();
//     }
// }

// $pi = new pi();
// $pi->useStatic();
// echo $pi->staticValue();



//================================================================================



// use static property and method from a child class

// class pi
// {
//     public static $value = 3.14159;

//     protected static function getPIValue()
//     {
//         return self::$value;
//     }
// }

// class x extends pi
// {
//     public function xStatic()
//     {
//         return parent::$value;
//     }

//     public function staticMethodCall()
//     {
//         return parent::getPIValue();
//     }
// }


// $x = new x();
// echo $x->xStatic() . "<br/>";
// echo $x->staticMethodCall();
