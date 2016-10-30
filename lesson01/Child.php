<?php

/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016-09-25
 * Time: 8:41 PM
 */
class Child extends Person
{
    public function __construct()
    {
        // call the parent constructor first
        parent::__construct();
        echo "<br> A child was created";
    }

    // new method defined in the Child class
    public function sayHi(){
        echo "Hi";
    }

    public function increaseCount(){
        // call the static $count variable from Person
        Person::$count++;
    }

    public function getCount(){
        return Person::$count;
    }
}