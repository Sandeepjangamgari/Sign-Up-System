<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/signup_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="POST">
        <?php
            signup_inputs();
        ?>
        <button>SignUp</button>
    </form>

    <!-- <form action="includes/login.inc.php" method="POST">
        <input type="text" name="username" placeholder = "Username..."/>
        <input type="password" name="pwd" placeholder = "Password..."/>
        <button>Login</button>
    </form> -->

    <?php
        check_signup_errors();
    ?>
</body>
</html>