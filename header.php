<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <div>
            <h3>Testing</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Sales</a></li>
                <li><a href="#">Member</a></li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php if (isset($_SESSION["userid"])){ ?>
                <li><a href="profile.php"><?php echo $_SESSION['useruid']?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">Logout</a></li>
            <?php }else{ ?>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#" class="header-login-a">Login</a></li>
            <?php } ?>
        </ul>
    </nav>
</header>