<?php

class Person
{
    private $age;
    private $name;
   
    // default state of the object 
    public function __construct()
    {
        $this->age = 0;
        $this->name = 'John Doe';
    }
    
    // get the current value of age
    public function getAge()
    {
        return $this->age;        
    }
    
    // alter the current value of age
    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
}
