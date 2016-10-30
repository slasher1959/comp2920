<?php

class Person
{
	private $age;
	private $name;

	public function __construct()
	{
		$this->age = 0;
		$this->name = "John Doe"
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
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
}

?>