<?php
    session_start();
    if(isset($_SESSION['userId'])) {
        require('./config/db.php');
        $userId = $_SESSION['userId'];
        $stmt = $pdo -> prepare('SELECT * from users WHERE id = ?');
        $stmt->execute([$userId]);
        $user = $stmt->fetch();
        if($user->role === 'guest') {
            $message = "Your role is guest";
        } elseif( $user->role === 'admin' ) {
            $stmt = $pdo -> prepare('SELECT * from users');
            $stmt->execute();
            $users = $stmt->fetchAll();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='style.css'></link>
    <title>Document</title>
</head>
<body>
    <nav class='navbar'>
        <ul>
            <?php if(isset($user)) { ?>
                <button><a href="dashboard.php">dashboard</a></button>
                <button><a href="logout.php">logout</a></button>
            <?php } else { ?>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            <?php } ?> 
        </ul>
    </nav>
    <?php if(isset($user)) { ?>
        <h1>Welcome <?php echo $user->name ?></h1>
        <?php if(isset($message)) { ?>
            <h4><?php echo $message?></h4>
        <?php } elseif(isset($users)) { ?>
            <h4>Your Role: ADMIN</h4>
            <p>All Users</p>
            <ul>
                <?php foreach($users as $user) { ?>
                    <li><?php echo $user->name ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <p>This is a super secret content only for logged in people</p>
    <?php } else { ?>
        <h1>Please Log in</h1>
    <?php } ?>  
</body>
</html>