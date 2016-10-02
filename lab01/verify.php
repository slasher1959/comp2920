<?php

require "../vendor/autoload.php";   // .. lets me look in the root directory for the zendframework

use Zend\Crypt\Password\Bcrypt;
//var_dump($argc, $argv);        // for testing my input
$bcrypt = new Bcrypt();
$passwordVerified = $bcrypt->verify($argv[1], $argv[2]);   // use two input parameters to check if the hash is correct for the password, first one is the password and the second one is the hash

if ($passwordVerified) {   // test if password was verified as valid and print appropriate message
    echo "valid" . PHP_EOL;
} else {
    echo "invalid" . PHP_EOL;
}