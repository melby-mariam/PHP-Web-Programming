<?php
// I. Declare an associative array named “items” with the given key-value pairs
$items = array(
    "Bread" => 30,
    "Butter" => 30,
    "Jam" => 35,
    "Cheese" => 32
);

// II. Print the array using a foreach loop
echo "Original array: <br>";
foreach ($items as $key => $value) {
    echo "$key: $value <br>";
}

// III. Sort the array according to values maintaining the key-value relationships
asort($items); // Sorts the array in ascending order based on value, maintaining key-value pairs

// Print the sorted array
echo "<br>Array sorted by values:<br>";
foreach ($items as $key => $value) {
    echo "$key: $value<br>";
}
?>