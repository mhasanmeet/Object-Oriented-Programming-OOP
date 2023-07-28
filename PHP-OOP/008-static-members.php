<?php

    class properties{ //static class
        public static $name = "Mahmudul"; //member variable
 
        public static function show(){ //member method
            echo self::$name; //:: scope resolution operator use to reference the global variable or member function that is out of scope.
        }
    } 

    echo properties::$name;
    properties::show();

?>