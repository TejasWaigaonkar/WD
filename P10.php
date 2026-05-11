Exp 10 - Write a PHP program to accept form input and display it using the POST method

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>

<body>

<h2>Enter Your Details</h2>

<form action="process.php" method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>