<?php

// ---- Get requests (information in the form below goess into get array) ----//
print_r ($_GET);

$name = $_GET['userName'];
echo "My name is $name";

if( isset($_GET['userName']) && isset($_GET['userEmail'])) {
    $name = $_GET['userName'];
    echo "my name is $name <br>";

    $email = $_GET['userEmail'];
    echo "my email is $email <br>";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="get-post.php" method="get">
        <label for="Username">Enter User Name</label>
        <input name="UserName" type="text"><br />

        <label for="userEmail">Enter User Email</label>
        <input name="userEmail" type="text"> <br />
        <input type="submit" value="Login">
    </form>
</body>
</html>