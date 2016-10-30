<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016-09-25
 * Time: 8:44 PM
 */
require("Person.php");
require("Child.php");

$child1 = new Child();
$child1->increaseCount();  // first child object, increase the count
$child1->increaseCount();
$child1->increaseCount();

// new Child object, it'll retriee the $count value
// that was done with child1
$child2 = new Child();
echo $child2->getCount();

//$child->setName("Johnny E"); // inherit from Person
//child->sayHi();            // from Child