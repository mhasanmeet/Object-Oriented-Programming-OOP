<?php

    class properties{
        public static $name = "Mahmudul";

        public static function show(){
            echo self::$name;
        }
    } 

    echo properties::$name;
    properties::show();

?>