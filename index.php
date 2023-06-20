<?php
    include_once "header.php";
?>
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