<?php 

    // ---- Targeting session start ----//
    session_start();

    if (isset($_SESSION['userId'])) {
        session_destroy ();
        header ("Location: http://localhost:8888/php-basics/pdo/index.php");
    }


?>