<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <!-- set user info to cookies -->
    <?php
        $name = "user";
        $value = "John Doe";
        $expire = time() + (60*60*24*7);
        setcookie($name, $value, $expire);
        // get cookie data
        if(isset($_COOKIE["user"])){
            $user = $_COOKIE["user"];
            echo "Welcome back " . $user;
        }else{
            $user = "";
        }
    ?>
</body>
</html>