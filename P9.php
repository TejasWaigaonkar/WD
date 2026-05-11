Exp 9 - Write a PHP program to display the current date and time in a welcome page

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>

<div class="container">
    <?php
        // Set the default timezone
        date_default_timezone_set("Asia/Kolkata");

        // Display welcome message
        echo "<h2>Welcome!</h2>";

        // Display current date
        echo "Current Date: " . date("l, d F Y") . "<br><br>";

        // Display current time
        echo "Current Time: " . date("h:i:s A") . "<br>";
    ?>
    
</div>
</body>
</html>