<?php

// Method: __sleep

// Purpose: Called when an object is serialized with serialize().

// Usage: Used to specify which properties should be serialized.

// __serialize is same as __sleep. This is updated version of __sleep (PHP 7.4).




class MyClass
{
    private $data1 = 'value 1';
    private $data2 = 'value 2';

    public function __sleep()
    {
        return ['data1', 'data2'];
    }

    // public function __serialize()
    // {
    //     return ['data1' => $this->data1];
    // }
}
$obj = new MyClass();

// Calls __sleep() brefore serialize
echo serialize($obj);
