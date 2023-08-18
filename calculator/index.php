<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Calculator</title>
</head>

<body>
    <div class="container">
        <h1>Calculator</h1>
        <form accept="index.php" method="post">
            <label>First Input:</label>
            <input type="number" name="first_input">
            <br>
            <label>Second Input:</label>
            <input type="number" name="second_input" >
            <br>
            <div>
                <input type="submit" name="add" value="+">
                <input type="submit" name="subtract" value="-">
                <input type="submit" name="multiply" value="X">
                <input type="submit" name="divide" value="/">
                <input type="submit" name="clear" value="C">
            </div>
            <br>
        </form>
        <label>Result:</label>
        <h2>
            <?php
            $first_input = $_POST['first_input'];
            $second_input = $_POST['second_input'];
            if(isset($_POST['add'])){
                echo $first_input + $second_input;
            }elseif(isset($_POST['subtract'])){
                echo $first_input - $second_input;
            }elseif(isset($_POST['multiply'])){
                echo $first_input * $second_input;
            }elseif(isset($_POST['divide'])){
                echo $first_input / $second_input;
            }elseif(isset($_POST['clear'])){
                echo "";
            }
            ?>
        </h2>
    </div>
</body>

</html>