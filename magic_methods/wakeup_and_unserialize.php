<?php

// Method: __wakeup

// Purpose: Called when an object is unserialized with unserialize().

// Usage: Used to reinitialize properties or resources upon unserialization.

// __unserialize is same as __wakeup. This is updated version of __wakeup (PHP 7.4).




class MyClass
{
    private $data;

    public function __wakeup()
    {
        $this->data = ['value'];
        echo 'Called wakeup <br/>';
    }

    // public function __unserialize($obj)
    // {
    //     $this->data = ['value'];
    //     echo 'Called unserialize <br/>';
    // }
}


$serializedObj = serialize(new MyClass());

// Calls __wakeup() and get back the object
var_dump(unserialize($serializedObj));
