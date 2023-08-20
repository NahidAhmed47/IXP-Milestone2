<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "Nahid Ahmed";
    $age = 20;
    $cgpa = 3.50;
    $isMale = true;
    $friends = array("Nahid", "Ahmed", "Rakib", "Rahim");
    print($name . '<br>');

    // constant variable
    define("GPA", 3.14);
    echo "The value of GPA is " . GPA . "<br>";

    // while loop syntax
    $counter = 0;
    while ($counter < 3) {
        echo "Count: $counter<br>";
        $counter++;
    }

    // array syntax
    $fruits = array("apple", "banana", "cherry");
    echo "I like " . $fruits[0];

    $person = array("first_name" => "John", "last_name" => "Doe");
    echo "Full Name: " . $person["first_name"] . " " . $person["last_name"];

    // debug system
    $debugVar = "Hello, Debug!";
    var_dump($debugVar);
    $debugArray = array(1, 2, 3);
    print_r($debugArray);
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    // PHP Object
    class Student
    {
        var $name;
        var $cgpa;
        function studentRole($role)
        {
            global $name;
            $name = $role;
            echo "Student Name: " . $name . "<br>";
        }
    }

    $student1 = new Student();
    $student1->studentRole("Nahid Ahmed");
    $sudent2 = new Student();
    $sudent2->studentRole("Rakib Hasan");
    ?>
</body>

</html>