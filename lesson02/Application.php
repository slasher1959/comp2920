<?php

class Application
{
    // define a class constant
    const VERSION = '1.0.0';
    
    private $person;
            
    // our type hinting can also be an interface
    // any instance of a class that implements the NameInterface will be a valid parameter
    public function __construct(NameInterface $person)
    {
        $this->person = $person;
    }
    
    public function run()
    {
        // try to run the follow block of code
        try
        {
            echo $this->person->getName();
            
            // thanks to the abstract class, this print method was readily available
            $this->person->printAge();
        }
        catch(Exception $e)
        {
            
            // if code in the try block throws an exception, we caught it here
            // this tells use something bad happened and allows us to handle it gracefully
            echo "Something went wrong!";
            //echo $e->getMessage();
        }
        finally
        {
            // a finally block always runs with or without an exception
            echo "Application finished running!";
        }        
    }    
}
