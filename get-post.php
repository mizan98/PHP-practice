<?php

// ---- Get requests (information in the form below goess into get array) ----//
if( isset($_POST['userName']) && isset($_POST['userEmail'])) {
    $name = htmlentities( $_POST['userName'] );
    echo "My name is $name <br>";

    $email = htmlentities(  $_POST['userEmail'] );
    echo "My email is " . $email . "<br>";
    echo "This is from a POST form";
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