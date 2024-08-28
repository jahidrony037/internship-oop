<?php
//Namespaces are qualifiers that solve two different problems:

//1) They allow for better organization by grouping classes that work together to perform a task
//2) They allow the same name to be used for more than one class


require('class_one.php');
require('subFolder/class_two.php');
require('class_three.php');

// grouping class
$instance_one = new namespaceExample\ClassName();
echo $instance_one->getClassName() . "<br/>";

$instance_two = new namespaceExample\ClassName2();
echo $instance_two->getClassName() . "<br/>";

// allow same name more than one class
$instance_three = new namespaceExample\subFolder\ClassName();
echo $instance_three->getClassName();
