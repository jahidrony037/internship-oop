<?php

// Method: __debugInfo

// Purpose: Called when var_dump() is used on an object.

// Usage: Used to control which properties are shown when dumping an object.



class MyClass
{
    private $secret = "hidden";
    public $visible = "visible";

    public function __debugInfo()
    {
        return [
            'visible' => $this->visible,
            // 'secret' => $this->secret, // Uncomment to include
        ];
    }
}

$obj = new MyClass();

// Calls __debugInfo()
var_dump($obj);
