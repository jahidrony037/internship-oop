<?php

// Method: __construct

// Purpose: The constructor method is automatically called when an object is instantiated.

// Usage: Used to initialize object properties or perform setup tasks.




class MyClass
{
    public function __construct()
    {
        echo "Constructor called";
    }
}

// Constructor called with parameter: Hello World
$obj = new MyClass();



// =================================================================================




// Constructor with parameters

// class MyClass
// {
//     public function __construct($param)
//     {
//         echo "Constructor called with parameter: $param";
//     }
// }

// // Constructor called with parameter: Hello World
// $obj = new MyClass("Hello World");