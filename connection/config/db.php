<?php 

//---- Creating a connection ----//

$conn = mysqli_connect('localhost', 'root', 'root', 'phpblog');

if(mysqli_connect_errno ()){
    echo 'failed to connect';
}
// else {
//     echo 'we are connected';
// }


?>