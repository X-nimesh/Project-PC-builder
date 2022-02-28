<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/style1.css">
    <link rel="icon" href="img/edge tech.png" type="image/png">
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

        <header class="header">
            <div class="container">
                <div class="logom">
                    <a href="/index.html"><img src="img/edge tech.png" alt="logo" class="logo"></a>
                </div>
                    <ul  class="nav-bar">
                        <div id='nav' class="nav-barIn">
                            <li class="nav-link"><a href="index.php">Home</a></li>
                            <li class="nav-link"><a href="pcbuilder.php">PC Builder</a></li>
                            <li class="nav-link"><a href="shop.php">Shop</a></li>
                            <li class="nav-link"><a href="contact.php">Contact</a></li>
                        </div>
                        <li><div id="btn-main" class="loginB"><a href="LoginPage.php" id="btntxt">Login</a></div></li>
                    </ul>
            </div>
        </header>
    </div>


    <script src="script.js"></script>
    <script >
        // let logged_in='<?php echo $_SESSION['uname']; ?>';
        // console.log(logged_in);
        let profile=document.getElementById('nav');
        console.log(<?php echo isset($_SESSION['uname'])?>);
        if(<?php echo isset($_SESSION['uname']);?>){
                document.getElementById('btntxt').innerText = "Log Out";
                document.getElementById('btntxt').href="server/logOut.php";
                // document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='/profile.php'>Profile</a></li>";
                document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='profile.php'><img src='img/account.png' style='margin-top:12px;' width=35px alt='acc'></a></li>";
            

               document.getElementById('btn-main').style.backgroundColor = "red";
        }
    </script>
</body>
</html>