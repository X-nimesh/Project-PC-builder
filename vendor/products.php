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
<body class="products">
   <div class="bodyV">
   <div class="bodyV">
        <?php
            include "vendorNavBar.php";
        ?>
         <div class="mainV">
             <div class="top">
                 <div class="welcome">
                     <h1 style="text-transform:capitalize;">Hello <?php echo $_SESSION['Name'];?> </h1>
                     <h3>Welcome to the admin page!</h3>
                </div>
                <div class="buttonNewProduct">
                    Add Products
                </div>
                </div>
                <div class="mainTable">
                    
                    <div class="cpu">

                        <h2>CPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Frequency</td>
                                    <td> Power Usage</td>
                                    <td> Power Quantity</td>
                                    <td> Price</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $id=$_SESSION['vid'];
                            $sql="SELECT  * FROM cpu where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){

                                $com=$row['company'];
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['freq']."</td>"; 
                                echo "<td>".$row['powUsage']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td>".$row['price']."</td>"; 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="gpu">

                        <h2>GPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size</td>
                                    <td> Memory Type</td>
                                    <td> Power Consumption</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $sql="SELECT  * FROM gpu where vid='$id';;";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){

                                $com=$row['company'];
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['memSize']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>".$row['powUsage']."</td>"; 
                                echo "<td>".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="addProduct">
                        <form action="addProducts.php">
                            
                        </form>
                    </div>
                </div>
            </div>
   </div>
</body>
</html>