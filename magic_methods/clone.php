<?php

// Method: __clone

// Purpose: Called when an object is cloned.

// Usage: Used to control the behavior of an object when it is cloned.


class MyClass
{
    public $name;

    public function __clone()
    {
        $this->name = "Cloned " . $this->name;
    }
}

$obj1 = new MyClass();
$obj1->name = "Original";

// Calls __clone()
$obj2 = clone $obj1;
echo $obj2->name; // Outputs: Cloned Original

echo $obj1->name; // Outputs: Original