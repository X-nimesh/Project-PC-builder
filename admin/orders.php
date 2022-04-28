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
<body class="Aorders">

   <div class="bodyA">
        <?php
            include "adminNavbar.php";
        ?>
         <div class="mainA">
                <div class="top">
                    <div class="welcome">
                        <h1 style="text-transform:capitalize;">Hello <?php echo $_SESSION['name'];?> </h1>
                        <h3>Welcome to the vendor page!</h3>
                    </div>
                
                  
                </div>
                <div class="mainTableA">
                       
                        <div class="cpu table">

                            <h2>CPU</h2>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td> Cpu ID</td>
                                        <td> Company</td>
                                        <td> Model</td>
                                        <td> Frequency</td>
                                        <td> Power Usage</td>
                                        <td> Quantity</td>
                                        <td> Price</td>
                                        <td> Operation</td>
                                    </tr>
                                </thead>
                            <tr>
                            <?php
                                include "../conn.php";    
                                $id=$_SESSION['vid'];
                                $sql="SELECT  * FROM cpu ";
                                $res= mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    while($row=mysqli_fetch_assoc($res)){

                                        $com=$row['company'];
                                        echo "<td>".$row['cpuId']."</td>"; 
                                        echo "<td>".$com."</td>"; 
                                        echo "<td>".$row['model']."</td>"; 
                                        echo "<td>".$row['freq']."</td>"; 
                                        echo "<td>".$row['powUsage']."</td>"; 
                                        echo "<td>".$row['quantity']."</td>"; 
                                        echo "<td>$".$row['price']."</td>"; 
                                        echo "<td ><a class='btn-edit' 
                                                href='../server/vendorEdit.php?id=".$row['cpuId']."&typ=cpu&idType=cpuId'>Edit</a>||
                                                <a class='btn-delete' 
                                                href='../server/delete.php?id=".$row['cpuId']."&typ=cpu&idType=cpuId'>Delete</a></td>";
                                        echo "</tr>";
                                    }  
                                }
                                else{
                                    echo "No CPU found";
                                }
                                ?>
                            </tr>
                        
                            </tr>
                            </table>
                        </div>
                    
                </div>
         </div>
    </div>
</body>
</html>