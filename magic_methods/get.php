<?php

// Method: __get

// Purpose: Called when accessing an inaccessible or non-existent property.

// Usage: Used to control how properties are retrieved.




// Try to access in non-existent property

class MyClass
{

    public function __get($name)
    {
        echo "The property <b> {$name} </b> is not available in this instance";
    }
}

$obj = new MyClass();
echo $obj->someProperty;




// ========================================================================================




// Try to access to inaccessible property

// class MyClass
// {
//     private $data = "Hello World";

//     public function __get($name)
//     {
//         echo "The property <b> {$name} </b> is inaccessible.";
//     }
// }

// $obj = new MyClass();
// echo $obj->data;
