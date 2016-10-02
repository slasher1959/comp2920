<?php

require "../vendor/autoload.php";   // .. lets me look in the root directory for the zendframework

use Zend\Crypt\Password\Bcrypt;
//var_dump($argc, $argv);        // for testing my input
$bcrypt = new Bcrypt();
$passwordHash = $bcrypt->create("$argv[1]");   // use the input parameter for the password

echo $passwordHash . PHP_EOL;