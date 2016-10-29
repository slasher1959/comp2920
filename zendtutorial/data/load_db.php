<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016-10-15
 * Time: 7:36 AM
 */
$db = new PDO('sqlite:' . realpath(__DIR__) . '/zftutorial.db');
$fh = fopen(__DIR__ . '/schema.sql', 'r');
while ($line = fread($fh, 4096)){
    $db->exec($line);
}
fclose($fh);