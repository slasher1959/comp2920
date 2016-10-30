<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016-10-14
 * Time: 1:55 PM
 */

namespace Testing;

class MyTestClass {

    public function getClassName() {

        return $this->class;
    }
}

$echoTxtClass = new MyTestClass();
echo MyTestClass::class;
