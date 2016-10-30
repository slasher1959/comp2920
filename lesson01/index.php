<?php

require ("Person.php");
require ("Application.php");

//create instances of the Person class
$person1 = new Person();
$person1->setName("Gary");   //name is John Doe

$app = new Application($person1);
echo "application started <br>";

$app->run();
echo "application finished<br>";
							//age is 0
/*$person2 = new Person();

//using their methods, alter their state
/*$person1->setName("John");
$person2->setName("Jane");*/

// print out each person's name property
/*echo $person1->getName();
echo "<br>";
echo $person2->getName();
*/