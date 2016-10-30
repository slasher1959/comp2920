<?php

// load the required files, which have our defined classes
require 'Person.php';
require 'Application.php';

// create an instance of the Person class
$person1 = new Person();	
$person->setAge(100);
		
// create an instance of the Application class
$app = new Application();
$app->run($person); // the run method takes a Person as a parameter
