<?php

    //declare a interface
    interface parent1{
        function calc($a, $b);
    }

    //declare another interface
    interface parent2{
        function name($n);
    }

    //declare class and implement those interface
    class childClass implements parent1, parent2{
        function calc($a, $b){
            echo $a + $b;
        }

        function name($n){
            echo $n;
        }
    }

    //make new object
    $test = new childClass();
    $test->calc(20, 25);
    $test->name("Hello");

?>