<?php
include 'header.php';
if(!empty($_GET)){

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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/style1.css">
</head>
<body>
    <div class="bg1">
        <header class="header">
            <div class="container">
                <div class="logom">
                    <a href="/index.html"><img src="img/edge tech.png" alt="logo" class="logo"></a>
                   
                </div>
               

                    <ul class="nav-bar">
                        <li class="nav-link"><a href="/index.php">Home</a></li>
                        <li class="nav-link"><a href="/pcbuilder.php">PC Builder</a></li>
                        <li class="nav-link"><a href="/shop.php">Shop</a></li>
                        <li class="nav-link"><a href="/contact.php">Contact</a></li>
                        <li><div class="loginB"><a href="LoginPage.php">Login</a></div></li>
                    </ul>

                
                
            </div>
        </header>
    </div>



    <script src="/script.js"></script>
</body>
</html>