<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="POST">
    Enter two numbers: <br><br>
    Enter the first number:
    <input type="number" name="num1"> <br> <br> 
    Enter the second number:
    <input type="number" name="num2"> <br><br>
    <input type="submit" name= "button" value="Calculate">
    </form>
</body>
</html>

<?php
if(isset($_POST['button']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $add = $num1 +$num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num2 != 0 ? $num1 / $num2 : "Division by zero error";

    echo "<h3>Results:</h3>";
    echo "Addition: $add <br>";
    echo "Subtraction: $sub <br>";
    echo "Multiplication: $mul <br>";
    echo "Division: $div <br>";
}

?>