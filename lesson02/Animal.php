<?php

class Animal implements NameInterface
{
    private $name;
    
    // because we implent the NameInterface, we are required to have these methods defined    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
}
