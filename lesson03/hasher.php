<?php
//namespace Zend\Crypt;
require "../vendor/autoload.php";   // .. lets me look in the root directory for the zendframework

use Zend\Crypt\Password\Bcrypt;

$bcrypt = new Bcrypt();
$passwordHash = $bcrypt->create("secretpassword");

echo $passwordHash . PHP_EOL;
echo "Current Namespace: " . __NAMESPACE__ . PHP_EOL;;
echo "The End!" . PHP_EOL;