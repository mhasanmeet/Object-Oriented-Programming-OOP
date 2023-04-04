<?php
    //Primary class
    class employee{
        public $name;
        public $age;
        public $salary;


        //Constructor function
        function __construct($n, $a, $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        //echo data
        function show(){
            echo "Employee Name: " . $this->name . "<br>";
            echo "Employee Age: " . $this->age . "<br>";
            echo "Employee Salary: " . $this->salary . "<br>";
            echo "<br>";

        }
    }

    //make new objects
    $e1 = new employee("Kazi Sakib", 29, 30000);
    $e1-> show();

    $e2 = new employee("Mahmudul Hasan", 35, 50000);
    $e2-> show();

    $e3 = new employee("Yeamini Rahman", 35, 60000);
    $e3-> show();


    //new class which have inherited data from primary class
    class manager extends employee{
        public $phoneBill = "1000"; //the variable which only available in new class
        public $totalSalary;

        function show(){
            $this->totalSalary = $this->salary + $this->phoneBill;

            echo "Employee Name: " . $this->name . "<br>";
            echo "Employee Age: " . $this->age . "<br>";
            echo "Employee Salary: " . $this->totalSalary . "<br>";
            echo "<br>";

        }
    }

    $m1 = new manager("Test Manager", 40, 45000);
    $m1->show();

?>