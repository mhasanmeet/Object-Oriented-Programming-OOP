<?php

    trait hello{
        public function sayHello(){
            echo "Hello";
        }
    }

    trait world{
        public function sayWorld(){
            echo "World";
        }
    }


    class class1 {
        use hello, world;
    }

    class class2 {
        use hello;
    }

    $obj = new class1();
    $obj2 = new class2();

    $obj->sayHello();
    $obj->sayWorld();

?>