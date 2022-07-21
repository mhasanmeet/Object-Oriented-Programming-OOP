<?php

    // Class create, a kind of object and behavior like object
    class person{
        //Properties
        public $personName = "Mahmudul Hasan";
        public $personAge = 29;

        //constant
        const conData = 29;

        //method, method is exactly same as function, get data by a method
        public function getFirstName(){
            return $this->personName;
        }

        // and set temporary data by a method and parameter
        public function setFirstName($tempName){
            $this->personName = $tempName;
        }

    }

    // call a class instance with new keyword and put it in myObj
    $myObj = new person();

    // get person class data by myObj and print it
    echo $myObj-> personName.PHP_EOL; // PHP_EOL defines as End of line

    //get const data with scope resolution operator
    echo $myObj::conData.PHP_EOL; 

    // We can get data by directly
    echo person::conData.PHP_EOL;

    //access method
    $myObj->setFirstName("Kazi Sakib");

    echo $myObj->personName.PHP_EOL;

?>