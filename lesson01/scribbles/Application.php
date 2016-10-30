<?php

class Application
{
	private $person

    // type hinting forces a Person to be passed as the parameter
	public function run(Person $person)
	{
	    // using the parameter, set the person property
		$this->person = $person;
		
		// using the property, access the getAge() method, which is of public scope
		echo $this->person->getAge();
	}
}
