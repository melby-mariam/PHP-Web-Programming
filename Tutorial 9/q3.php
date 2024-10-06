<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check Even or Odd</h1>
    <form action="q3.php" method="post">
        Enter the number to find even or odd:
        <input type="number" name="num">
        <input type="submit" name="checkevenodd" value="Submit"> <br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['checkevenodd']))
{
    $num = $_POST['num'];

    if ($num % 2 == 0) {
        echo "The number $num is Even.";
    } else {
        echo "The number $num is Odd.";
    }
}

?>