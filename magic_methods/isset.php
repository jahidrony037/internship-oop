<?php

// Method: __isset

// Purpose: Called when isset() or empty() is used on inaccessible or 
// non-existent properties.

// Usage: Used to determine if a property is set or empty.




class MyClass
{
    private $data;

    public function __isset($name)
    {
        echo "The property <b> {$name} </b> is not accessible or not exist. <br/>";
    }
}

$obj = new MyClass();

isset($obj->data);
isset($obj->someProperty);

empty($obj->someProperty);
