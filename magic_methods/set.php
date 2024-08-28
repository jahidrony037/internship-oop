<?php

// Method: __set

// Purpose: Called when setting an inaccessible or non-existent property.

// Usage: Used to control how properties are set.




// Try to set data in non-existent property

// class MyClass
// {

//     public function __set($name, $value)
//     {
//         echo "The value <b>' {$value} '</b> assign on the property <b> {$name} </b> 
//         is failed.";
//     }
// }

// $obj = new MyClass();

// $obj->someProperty = 'property value';




// ========================================================================================




// Try to set data to inaccessible property

class MyClass
{
    private $data;

    public function __set($name, $value)
    {
        echo "The value <b>' {$value} '</b> assign on the
        private property <b> {$name} </b> is failed.";
    }
}

$obj = new MyClass();
$obj->data = "data value";
