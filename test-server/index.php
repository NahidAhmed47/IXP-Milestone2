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

    // PHP Object
    class Student{
        var $name;
        var $cgpa;
        function studentRole($role){
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