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
    <title>Products</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>
<body class="profile">
   <div class="bodyV">
   <div class="bodyV">
        <?php
            include "vendorNavBar.php";
        ?>
         <div class="profileV ">
              
                <div class="vendorProfile">
                    <img src="../img/user.png" alt="">
                    <div class="details">

                        <p style="text-transform:capitalize;">Name: <?php echo $_SESSION['Name'];?> </p>
                        <p>Vendor ID: <?php echo $_SESSION['vid'];?> </p>
                        <p>Email: <?php echo $_SESSION['Email'];?> </p>
                        <p>Phone: <?php echo $_SESSION['Contact'];?> </p>
                        <p>Address: <?php echo $_SESSION['Add'];?> </p>
                    </div>
                </div>

         </div>
</body>
</html>