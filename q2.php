<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check if a String is a Palindrome</h1>
    <form action="q2.php" method="post">
        Enter a string:
        <input type="text" name="inputString">
        <input type="submit" name="checkPalindrome" value="Check">
    </form>
</body>
</html>

<?php
if(isset($_POST['checkPalindrome']))
{
    $inputString = $_POST['inputString'];
    $reversedString = strrev($inputString);

    if ($inputString == $reversedString) {
        echo "<br>'$inputString' is a palindrome.";
    } else {
        echo "<br>'$inputString' is not a palindrome.";
    }
}
?>