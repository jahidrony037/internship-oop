<?php

// Method: __unset

// Purpose: Called when unset() is used on an inaccessible or non-existent property.

// Usage: Used to control the behavior when unsetting properties.



class MyClass
{
    private $data;

    public function __unset($name)
    {
        echo "The property <b> {$name} </b> is not accessible or not exist. <br/>";
    }
}

$obj = new MyClass();

unset($obj->data);
unset($obj->someProperty);
