Exp 12 - Create a PHP script to store and display values in an array.

<?php

$subjects = ["DBMS", "PHP", "Java","Python", "OS" ];

echo "<h2>Subjects stored are:<br></h2>";

foreach($subjects as $sub)
{
    echo $sub . "<br>";
}

?>