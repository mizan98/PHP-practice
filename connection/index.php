<?php 

    require('./config/db.php');

    //---- Creating a Query ----//
    $query = 'SELECT * from posts';

    //---- Get results ----//
    $results = mysqli_query($conn, $query);

    //---- Fetch Data ----//
    $posts = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>PHP Connect to MYSQL</h1>
    <div class="container">
        <nav>
            <h1>PHP MYSQL</h1>
            <ul>
                <li><a href="index.php">Home</a></li>   
                <li><a href="addpost.php">Add Post</a></li>
            </ul>
        </nav>
        <?php foreach($posts as $post) { ?>
        <div class="card">
            <h1><?php echo $post['title'] ?> </h1>
            <h4>Created by <?php echo $post['author']?></h4>
            <p><?php echo $post['body']?></p>
            <a href="./editpost.php?id=<?php echo $post['id']?>">Edit Post</a>
            <a href="./deletepost.php?id= <? echo $post['id']; ?>">Delete Post</a>
        </div>
        <?php } ?>
    </div>
</body>
</html>