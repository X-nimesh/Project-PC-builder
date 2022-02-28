
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="img/edge tech.png" type="image/png">
    <link rel="stylesheet" href="style/style1.css">
</head>
<body>
    

<div class="bg1">
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
<?php
//    echo $_SESSION['Name'];
?>

<div class="userbox">
    <div class="pic">
        <img src="img/account.png" width=100px alt="user">
    </div>
    <p class="type"><?php echo $_SESSION['userType']?></p>
    <div class="details">
        <p class="name">Name: <?php echo $_SESSION['Name']?></p>
        <p class="email">E-mail: <?php echo $_SESSION['email']?></p>
        <p class="contact">Contact: <?php echo $_SESSION['contact']?></p>
        <p class="address">Address: <?php echo $_SESSION['add']?></p>
    </div>
 
</div>

</div>
    

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