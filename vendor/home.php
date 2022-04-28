<!DOCTYPE html>
<?php
    session_start();
    include "../conn.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style1.css">
    <title>Admin Page</title>
</head>
<body class="dashboard">
   <div class="bodyV">
        <?php
            include "vendorNavBar.php";
        ?>
        <div class="mainV">
        <h1 style="text-transform:capitalize;">Hello <?php echo $_SESSION['Name'];?> </h1>
            <p>Welcome to the vendor page!</p>
            <div class="productsEnlisted">
                <h1>Product Enlisted</h1>
                <div class="productsAdmin">
                   
                        <ul class="categoryH">
                            <li> CPU<p><?php 
                              $sql="SELECT COUNT(cpuId) as total FROM cpu;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>
                            <li>GPU<p><?php 
                              $sql="SELECT COUNT(gpuId) as total FROM gpu;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>
                            <li>RAM<p><?php 
                              $sql="SELECT COUNT(ramId) as total FROM ram;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>
                            <li>Motherboard<p><?php 
                              $sql="SELECT COUNT(ramId) as total FROM ram;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>
                            <li>PSU<p><?php 
                              $sql="SELECT COUNT(ramId) as total FROM ram;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>
                            <li>Storage<p><?php 
                              $sql="SELECT COUNT(ramId) as total FROM ram;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>
                            <li>Case<p><?php 
                              $sql="SELECT COUNT(ramId) as total FROM ram;";
                              $res= mysqli_query($conn,$sql);
                              // echo $res;
                              $data=mysqli_fetch_assoc($res);
                              echo $data['total'];
                            ?></p></li>

                        </ul>
                        <ul class="categoryNumH">
                           <?php
                           
                           ?>
                        </ul>
                    
                </div>
            </div>
        </div>
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