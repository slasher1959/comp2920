<?php

class Person
{
	private $age;    // age property
	private $name;   // name property

    protected static $count = 0;  // static property

    /*
     * the constructor method
     */
	public function __construct()
	{
		$this->age = 0;
		$this->name = 'John Doe';
        echo "A person was created";
	}

	public function getAge()
	{
		return $this->age;  //return the value of age to the caller
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getName()
	{
		if(is_null($this->name)){
		    throw new Exception("No name set");
        }

        return $this->name;
	}

	/*
	 * a method to alter the name
	 */
	public function setName($name)
	{
	    //$this refers to the current instance
        // -> refers to properties in scope
		$this->name = $name;
	}

	public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br>A person was destroyed!";
    }
}

?>