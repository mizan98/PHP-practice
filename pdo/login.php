<?php
    session_start();

    if(isset($_POST['login'])) {
        require('./config/db.php');

        $userEmail = $_POST['userEmail'];
        $password = $_POST['password'];

        //---- Check if email exists in DB ----//
        $stmt = $pdo -> prepare('SELECT * from users WHERE email = ?');
        $stmt -> execute([$userEmail]);
        $user = $stmt->fetch();

        if(password_verify($password, $user->password)) {
            $_SESSION['userId'] = $user->id;
            header('Location: http://localhost:8888/php-basics/pdo/index.php');
        } else {
            echo "Passwords do not match";
        }


        //---- Insert Data ----//
        
    }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"></link>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <nav>
        <h1>PHP Login</h1>
        <ul>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    <h1>Login User</h1>
        <form action="login.php" method="POST">

            <div class='login container'>
            <div class="form-group">
                <label for="userEmail">User Email</label>
                <input name="userEmail" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="password" class="form-check-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleCheck1">
            </div>
            <button name="login" type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    </div>
</body>
</html>