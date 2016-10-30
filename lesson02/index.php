<?php

// load all classes we need
require 'NameInterface.php';
require 'AbstractAge.php';
require 'Person.php';
require 'Employee.php';
require 'Animal.php';
require 'Application.php';

// thanks to the abstract class, Person has setAge method enforced
$person = new Person();
$person->setAge(10);
$person->setName("Gary Tong");

// thanks to inheritance, Employee has the Person methods available
$employee = new Employee();
$employee->setAge(30);
$employee->setName("Gary Tong");

// thanks to an interface, Animal has the setName method enforced
$animal = new Animal();
$animal->setName("Snofu Tong");

$app = new Application($person);
echo $app::VERSION;     // get the class constant
$app->run();

