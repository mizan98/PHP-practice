<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $dbname = 'loginphp';

    //---- Set DSN ----//
    $dsn = 'mysql:host=' . $host . '; dbname=' . $dbname;

    //---- Create a new instance ----//
    $pdo = new PDO ($dsn, $user, $password);

?>




