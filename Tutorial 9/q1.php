<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial of a number</h1>
    <form action="" method="post">
        Enter the number:
        <input type="number" name="num">
        <input type="submit" name="fact" value="Find"> <br> <br>

    </form>
</body>
</html>

<?php
if(isset($_POST['fact'])){
    $num = $_POST['num'];
}
function factorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}
echo "The factorial of $num is: " . factorial($num);
?>
