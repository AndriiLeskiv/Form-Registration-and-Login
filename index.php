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
                    <li><a href="#"><?php echo $_SESSION['useruid']?></a></li>
                    <li><a href="includes/logout.inc.php" class="header-login-a">Logout</a></li>
                <?php }else{ ?>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#" class="header-login-a">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>Sign Up</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRepeat" placeholder="Repeat Password">
                    <input type="tel" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>Login</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>