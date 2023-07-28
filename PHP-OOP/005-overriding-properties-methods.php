<?php

class base{
    public $parentName = "Parent Class";

    // parent class calculation function
    public function add($a, $b){
        return $a * $b;
    }
}


class derived_class extends base{
    public $childName = "total sum";
}


$test = new derived_class();
echo $test->add(10, 20); //this parent function is derived from base class 