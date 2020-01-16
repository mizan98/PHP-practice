<?php 

    //---- Filters are used to check if the email is correctly written with sanitizers and filter checks ----//

    // if( isset($_POST['userName']) && isset($_POST['userEmail'])) {
    //     $name = $_POST['userName'] ;
    //     echo "My name is $name <br>";

    //     $email = $_POST['userEmail'] ;
    //     echo "My email is " . $email . "<br>";
    //     echo "This is from a POST form";
    // }

    if (filter_has_var(INPUT_POST, 'userName')) {
        echo 'user name found <br>';

        $email = filter_var($_POST ['userEmail'], FILTER_SANITIZE_EMAIL);
        echo $email;
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
    <form action="filters.php" method="POST">
        <label for="userName">Enter User Name</label>
        <input name="userName" type="text"><br />

        <label for="userEmail">Enter User Email</label>
        <input name="userEmail" type="text"> <br />
        <input type="submit" value="Login">
    </form>
</body>
</html>