
<?php
   
    session_start();
if(!isset($_SESSION['uid'])) {
    header("Location: index.php?fail=true");
    exit;
}
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
    <?php
        if(!empty($_GET)){
            echo "<div id='top-msg'  class='top-msg'>";
            if(!empty($_GET['success'])){
                ?>
                <div class="successh" role="alert">
                Logged in Successfully
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

        <?php
        //    echo $_SESSION['Name'];
        ?>

    <div class="userbox">
        <div class="pic">
            <img src="img/account.png" width=100px alt="user">
        </div>
    
        <div class="details">
            <p class="name">Id: <?php echo  $_SESSION['uid']?></p>
            <p class="name">Name: <?php echo $_SESSION['Name']?></p>
            <p class="email">E-mail: <?php echo $_SESSION['email']?></p>
            <p class="contact">Contact: <?php echo $_SESSION['contact']?></p>
            <p class="address">Address: <?php echo $_SESSION['add']?></p>
        </div>
    
    </div>

</div>
    

    <script >
        let logged_in=<?php echo isset($_SESSION['uname'])?>;
        console.log(logged_in);
        let profile=document.getElementById('nav');
        
        let signup = document.getElementById("signupB");

        console.log(<?php echo isset($_SESSION['uname'])?>);
        if(<?php echo isset($_SESSION['uname']);?>){
                document.getElementById('btntxt').innerText = "Log Out";
                document.getElementById('btntxt').href="server/logOut.php";
                // document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='/profile.php'>Profile</a></li>";
                document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='profile.php'><img src='img/account.png' style='margin-top:12px;' width=35px alt='acc'></a></li>";
                signup.style.display="none";


               document.getElementById('btn-main').style.backgroundColor = "red";
        }
        if(!<?php echo isset($_SESSION['uname']);?>){
        
            location.href = 'index.php';
        }
            


    </script>
</body>
</html>