<?php 

class magic{
    public function __construct(){
        echo "This is constructor function <br>";
    }

    public function test(){
        echo "This is test function <br>";
    }

    public function __destruct(){
        echo "This is destructor function <br>";
    }
}

$test = new magic;
$test->test();