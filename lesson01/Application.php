<?php

class Application
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function run()
    {
        echo $this->person->getName();
    }
}