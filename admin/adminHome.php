<!DOCTYPE html>
<?php
    session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
   
    <div class="sidebarA">
        <ul>
            <li>Orders</li>
            <li>Users</li>
            <li>Vendors</li>
            <li>Account</li>
        </ul>
    </div>
    <div class="mainA">
        
    </div>

    <script >
        // let logged_in='';
        // console.log(logged_in);
        // let profile=document.getElementById('nav');
        // console.log(<?php echo isset($_SESSION['uname'])?>);
        if(!<?php echo isset($_SESSION['uname']);?>){
            console.log("not logged in");
            location.replace("Project-PC-builder/admin/index.php");
            //     document.getElementById('btntxt').innerText = "Log Out";
            //     document.getElementById('btntxt').href="server/logOut.php";
            //     // document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='/profile.php'>Profile</a></li>";
            //     document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='profile.php'><img src='img/account.png' style='margin-top:12px;' width=35px alt='acc'></a></li>";
            

            //    document.getElementById('btn-main').style.backgroundColor = "red";
        }
        else{
            console.log("logged in");
        }
    </script>
</body>
</html>