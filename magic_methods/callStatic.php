<?php

// Method: __callStatic

// Purpose: Called when an inaccessible or non-existent static method is invoked.

// Usage: Used to handle dynamic static method calls.



class MyClass
{
    public static $test = 'value';

    private static function privateFn()
    {
        echo "Output from private static method";
    }
    public static function __callStatic($name, $arguments)
    {
        if (!empty($arguments)) {
            echo "Calling method <b>{$name}</b> with arguments: " . implode(', ', $arguments) . '<br/>';
            return;
        }
        echo "Calling method <b>{$name}</b> with no arguments <br/>";
    }
}

MyClass::someStaticMethod('arg1', 'arg2');
MyClass::privateFn();
