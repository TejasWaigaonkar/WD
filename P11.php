Exp 11 - Create a PHP script to perform string manipulation.

<?php

$str = "Computer Engineering";

echo "<h2>String Manipulation Program</h2>";

echo "Original String: " . $str . "<br><br>";

// Length of string
echo "Length of String: " . strlen($str) . "<br><br>";

// Reverse string
echo "Reversed String: " . strrev($str) . "<br><br>";

// Substring
echo "Substring (0,8): " . substr($str, 0, 8);

?>