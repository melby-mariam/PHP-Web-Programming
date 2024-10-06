<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Search for a String Pattern</h1>
    <form action="q3.php" method="post">
        Enter text: <br>
        <textarea name="text1"></textarea> <br>
        Enter a pattern to search: <br>
        <input type="text" name="text2"> <br> <br>
        <input type="submit" name="pattern" value="Search">
    </form>
</body>
</html>

<?php
if (isset($_POST['pattern'])) {
    $text = $_POST['text1'];
    $pattern = $_POST['text2'];

    if (strpos($text, $pattern) !== false) {
        echo "<h3>Pattern found!</h3>";
    } else {
        echo "<h3>Pattern not found!</h3>";
    }
}
?>