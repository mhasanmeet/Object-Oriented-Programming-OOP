<?php

    /*
    Traits are used to declare methods that can be used in multiple classes. 
    Traits can have methods and abstract methods that can be used in multiple classes, 
    and the methods can have any access modifier (public, private, or protected).
    */

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
        use hello, world; //get trait hello and world
    }

    class class2 { //get only hello trait
        use hello;
    }

    $obj = new class1();
    $obj2 = new class2();

    $obj->sayHello()
    // $obj->sayWorld();

?>