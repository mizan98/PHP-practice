<?php 

require('./config/db.php');

if(isset($_POST['submit'])) {
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['postTitle']);
    $body = mysqli_real_escape_string($conn, $_POST['postBody']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET title = '$title', body = '$body', author = '$author' WHERE id = 
    {$update_id}";

if(mysqli_query($conn, $query)){
    header('Location: http://localhost:8888/php-basics/connection/');
}
else {
    echo 'Error: ' . mysqli_error($conn);
}
}



    //---- Get ID ----//
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //---- Grabbing specific ID from post ----//
    $query = 'SELECT * FROM posts WHERE id = ' . $id;

    //---- Get results ----//
    $result = mysqli_query($conn, $query);

    //---- Fetch Data ----//
    $post = mysqli_fetch_assoc($result);


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
        <h1>Edit Post</h1>
                <form action="Editpost.php" method="POST">
        <div class="form-group">
            <label for="postTitle">Edit Post Title</label>
            <input value="<?php echo $post['title'] ?>" required name="postTitle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="postBody">Edit a post body</label>
            <input value="<?php echo $post['body'] ?>"name="postBody" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
        <label class="form-check-label" for="author">Edit author name</label>
            <input value="<?php echo $post['author'] ?>"name="author" type="text" class="form-control" id="exampleCheck1">
            <input type="hidden" name="update_id" value="<?php echo $post['id'] ?>">
            
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Edit a Post</button>
        </form>
    </div>
</body>
</html>