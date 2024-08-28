<?php

// Method: __call

// Purpose: Called when an inaccessible or non-existent method is invoked.

// Usage: Used to handle dynamic method calls.



class MyClass
{
    private function test()
    {
        echo 'Output from test method.';
    }

    public function __call($name, $arguments)
    {
        if (!empty($arguments)) {
            echo "Calling method <b>{$name}</b> with arguments: " . implode(', ', $arguments) . '<br/>';
            return;
        }
        echo "Calling method <b>{$name}</b> with no arguments <br/>";
    }
}

$obj = new MyClass();
$obj->someMethod('arg1', 'arg2');
$obj->test();
