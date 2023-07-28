<?php

    //class and object in PHP
    class person{
        public $name; //public property variable

        function __construct($n){ //constructor function, call automatically
            $this->name = $n;
        }

        function show(){
            echo "Your Name: " . $this -> name; 
        }
    }

    $p1 = new person("Mahmudul Hasan");
    $p1-> show();





    class person2{
        public $name = "No Name"; //public property variable
        public $age = "0"; //public property variable

        function __construct($n, $a){
            $this->name = $n;
            $this->age = $a;
        }

        function show(){
            echo "My name is: " . $this-> name . "& my age is: " . $this->age;
        }
    }

    $p2 = new person2("Kazi Sakib", 28);
    $p2-> show();

?>