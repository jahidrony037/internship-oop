<?php

// Method: __toString

// Purpose: Called when an object is treated as a string 
// (e.g., when using echo or print on an object).

// Usage: Used to define how an object should be converted to a string.


class MyClass
{
    public function __toString()
    {
        return "This is MyClass object";
    }
}
$obj = new MyClass();
echo $obj;


