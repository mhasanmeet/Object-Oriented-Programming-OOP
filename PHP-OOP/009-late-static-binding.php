<?php 

class base{ //base/primary class
    protected static $name = "Mahmudul";

    public function show(){
        echo self::$name;
        echo static::$name;
    }
}

class derived extends base{ //extended/derived class from base class
    protected static $name = "Hasan";
}

// $test = new base();
$test = new derived();

$test->show();