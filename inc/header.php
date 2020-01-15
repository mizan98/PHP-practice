<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <h2>Blog</h2>
        <ul>
            <li><a class="<?php echo $page == "home" ? "active" : '' ?>" href="home.php">Home</a></li>
            <li><a class="<?php echo $page == "about" ? "active" : '' ?>" href="about.php">About</a></li>
            <li><a class="<?php echo $page == "contact" ? "active" : '' ?>" href="contact.php">Contact</a></li>
        </ul>
    </nav>