<?php 

require('./config/db.php');

if(isset($_POST['submit'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $title = mysqli_real_escape_string($conn, $_POST['postTitle']);
    $body = mysqli_real_escape_string($conn, $_POST['postBody']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "DELETE posts SET title = '$title', body = '$body', author = '$author' WHERE id = 
    {$delete_id}";

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
