<?php 
    require('./config/db.php');


    //---- Checking if we submitted the post ---//
    if(isset($_POST['submit'])) {

        //---- Used to make sure correct and non malicious info is added ----//
        $title = mysqli_real_escape_string($conn, $_POST['postTitle']);
        $body = mysqli_real_escape_string($conn, $_POST['postBody']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        echo "$title - $body - $author <br>";

        $query = "INSERT INTO posts (title, body, author) VALUES('$title','$body','$author')";

        if(mysqli_query($conn, $query)){
            header('Location: http://localhost:8888/php-basics/connection/');
        }
        else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }



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
    <div class="container">
        <h1>Add Post</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li> 
        </nav>
        <div class="form-group">
            <label for="postTitle">Add Post Title</label>
            <input required name="postTitle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="postBody">Add a post body</label>
            <input name="postBody" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
        <label class="form-check-label" for="author">Add author name</label>
            <input name="author" type="text" class="form-control" id="exampleCheck1">
            
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Add a Post</button>
        </form>
    </div>
</body>
</html>