<?php

//Encapsulation

//Encapsulation is the concept of bundling the data (variables) and methods (functions) that operate
// on the data into a single unit, called an object. It restricts direct access to some of the object's
// components, which is a means of preventing accidental or intentional interference and misuse of the
// methods and data. In PHP, this is achieved through the use of visibility keywords like private, protected,
// and public.


class User {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User();

$user->setName('Mehedi');

echo $user->getName();


