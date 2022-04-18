<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style1.css">
    <link rel="icon" href="img/edge tech.png" type="image/png">
    <title>Login Page</title>
</head>
<body>
    <div class="bg1">
    <?php
        if(!empty($_GET)){
            echo "<div id='top-msg'  class='top-msg'>";
            if(!empty($_GET['success'])){
                ?>
                <div class="successh" role="alert">
                Registered Successfully
                </div>
            <?php
            }
            if(!empty($_GET['error'])){
                ?>
                <div class="errorh" role="alert">
                Login credential is wrong
                </div>
            <?php
            }
            if(!empty($_GET['failed'])){
                ?>
                <div class="failh" role="alert">
                Please login in
                </div>
            <?php
            }
            if(!empty($_GET['lout'])){
                ?>
                <div class="logouth" role="alert">
                Logged Out Successfully
                </div>
            <?php
            }
            echo "</div>";
        }
    ?>
        <?php
             include "menu.php";
        ?>


        <div class="login">
            <div class="containermain">
                <form class="loginF" action="server/loginBack.php" method="post">
                    <h1>Here you can login</h1>
                    <label for="email">E-mail</label><br>
                    <input type="text" name="email" title="email">
                    <br>
                    <label for="pass">Password</label><br>
                    <input type="password" name="pass" title="pass">
                    <br>
                    <br>
                    <input  class="btn-grad" type="submit" value="login">
                    <p>Not registered yet? <a href=signuppage.php>Create an Account</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>