<?php

    abstract class parentClass{
        public $name;

        abstract protected function calc($a, $b);
    }

    class childClass extends parentClass{
        public function calc($c, $d){
           return $c * $d;
        }
    }

    $test = new childClass();
    $test->calc(10, 20);