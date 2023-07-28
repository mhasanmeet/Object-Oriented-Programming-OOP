<?php

trait hello{
    public function sayhello(){
        echo "Hello everyone";
    }
}

class base{
    use hello;
}

class child extends base{
    public function sayhello(){
        echo "Hello from child";
    }
}

$test = new base();
$test->sayhello();