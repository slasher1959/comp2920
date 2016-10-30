<?php

class Person extends AbstractAge implements NameInterface
{
    private $name;
    private $age;
    
    public function __construct()
    {
        //$this->name = 'John Doe';
        $this->age = '5';
    }

    // we must implement the age methods, because of the abstract class    
    public function getAge()
    {
        return $this->age;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
    }    
    
    // we must implement the name methods, because of the interface
    public function getName()
    {
        // check for an erroneous state
        if(is_null($this->name))
        {
            // comm
            throw new Exception("No name set!");
        }
        
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
}

