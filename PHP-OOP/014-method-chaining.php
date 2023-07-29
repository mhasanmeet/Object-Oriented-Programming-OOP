<?php

    class newClass{
        public function first(){
            echo "Echo from first function <br>";
            return $this;
        }

        public function second(){
            echo "Echo from second function <br>";
            return $this;
        }

        public function third(){
            echo "Echo from third function <br>";
            return $this;
        }
    }

    $obj = new newClass();

    $obj->first()->second()->third();
?>