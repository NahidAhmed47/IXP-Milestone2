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
        <form accept="" method="post">
            <label>First Input:</label>
            <input type="number" name="first_input" required>
            <br>
            <label>Second Input:</label>
            <input type="number" name="second_input" required>
            <br>
            <div>
                <input type="submit" name="add" value="+">
                <input type="submit" name="subtract" value="-">
                <input type="submit" name="multiply" value="*">
                <input type="submit" name="divide" value="/">
            </div>
            <br>
            <label>Result:</label>
            <!-- <input type="number" name="result" value="<?php echo $result; ?>" disabled> -->
        </form>
    </div>
</body>

</html>