<?php

abstract class AbstractAge
{
    abstract public function getAge();
    abstract public function setAge($age);
    
    public function printAge()
    {
        echo $this->getAge();        
    }
}
