<?php
    //public properties
    class publicProperties{
        public $name;

        public function __construct($n){
            $this->name = $n;
        }

        public function show(){
            echo "You name: " . $this->name . "<br>";
        }
    }

    $test = new publicProperties(""); //declare new object based on publicProperties class
    $test->name = "Kazi Sakib"; //modified name variable
    $test->show(); //call show function for echo data


    




    //protected class
    class protectedProperties{
        protected $age;

        public function __construct($a){
            $this->age = $a;
        }

        protected function protectEcho(){
            echo "My age is: " . $this->age;
        }
    }

    $protec = new protectedProperties(5);
    // $protec->age = 50; //this is not possible because age property in protectedProperties class is protected
    //$protec->protectEcho(); //also this protected function can not get directly


    class extendProtectedProperties extends protectedProperties{
        public function publicEcho(){
            echo "My age is: " . $this->age . "<br>";
        }
    }

    $extProtec = new extendProtectedProperties(20);
    $extProtec->publicEcho();










    //private class
    class privateClass{
        private $salary;

        function __construct($s){
            $this->salary = $s;
        }

        private function privateEcho(){
            echo "My Salary is:" . $this->salary;
        }
    }

    $prv1 = new privateClass(20000);
    //$prv1->salary = 30000; //can not possible to access or modified private class
    //$prv1->privateEcho() //can not possible to access privateEcho method as it is private 
?>