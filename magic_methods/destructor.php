<?php

// Method: __destruct

// Purpose: The destructor method is called when the script ends.

// Usage: Used to perform cleanup tasks, such as closing database connections.




class MyClass
{
    public function __construct($param)
    {
        echo "Constructor called with parameter: {$param} <br/>";
    }

    // destructor can't receive any arguments
    public function __destruct()
    {
        echo "Destructor called";
    }
}

// Constructor called with parameter: Hello World
$obj = new MyClass("Hello World");

// destructor will be called in the end of the script execution.
// echo "hello <br/>";
