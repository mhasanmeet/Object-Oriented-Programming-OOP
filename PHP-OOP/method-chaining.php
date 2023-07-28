<?php

    class newClass{
        public function first(){
            echo "Echo from class first <br>";
            return $this;
        }

        public function second(){
            echo "Echo from class second <br>";
            return $this;
        }

        public function third(){
            echo "Echo from class third <br>";
            return $this;
        }
    }

    $obj = new newClass();

    $obj->first()->second()->third();
?>