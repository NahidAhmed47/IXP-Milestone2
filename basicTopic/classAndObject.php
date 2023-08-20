<?php
    
    echo "Hello class and object!";
    // class and object
    class Student {

        public $name;

        function info(){
            echo "Hello";
        }
    }

    $student1 = new Student();
    $student1->info();
?>