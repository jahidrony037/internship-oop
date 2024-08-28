<?php

// Method: __invoke

// Purpose: Called when an object is used as a function.

// Usage: Used to define callable behavior for an object.


class MyClass
{
    public function __invoke($param)
    {
        return "Object called as function with parameter: $param";
    }
}

$obj = new MyClass();
echo $obj("Hello");
