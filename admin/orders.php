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
                       
                        <div class="orderstable">

                            <h2>Orders</h2>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td> Order Id</td>
                                        <td> UserName</td>
                                        <td> Cpu</td>
                                        <td> Gpu</td>
                                        <td> Ram</td>
                                        <td> Motherboard</td>
                                        <td> Power Supply</td>
                                        <td> Storage</td>
                                        <td>Total Price</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                            <tr>
                            <?php
                                include "../conn.php";    
                          
                                // $sql="SELECT  * FROM cpu ";
                                $sql="SELECT orders.*,users.Name as uname, cpu.model as cmodel,gpu.model as gmodel,motherboard.model as Mmodel
                                ,psu.model as pmodel,ram.model as rmodel,storage.model as smodel
                                FROM orders
                                    JOIN cpu
                                        ON orders.cpuId = cpu.cpuId
                                    JOIN gpu
                                        ON orders.gpuId = gpu.gpuId
                                    JOIN motherboard
                                        ON orders.motherId = motherboard.motId
                                    JOIN psu
                                        ON orders.psuId = psu.psuId
                                    JOIN ram
                                        ON orders.ramId =ram.ramId
                                    JOIN storage
                                        ON orders.StorId = storage.stoId
                                    JOIN users
                                        ON orders.uId = users.id
                                        ;";
                                $res= mysqli_query($conn,$sql);
                                // $row=mysqli_fetch_assoc($res);
                                // print_r($row);
                                if(mysqli_num_rows($res)>0){
                                    while($row=mysqli_fetch_assoc($res)){

                                        // $com=$row['company'];
                                        echo "<td>".$row['oId']."</td>"; 
                                        echo "<td>".$row['uname']."</td>"; 
                                        echo "<td>".$row['cmodel']."</td>"; 
                                        echo "<td>".$row['gmodel']."</td>"; 
                                        echo "<td>".$row['rmodel']."</td>"; 
                                        echo "<td>".$row['Mmodel']."</td>"; 
                                        echo "<td>".$row['pmodel']."</td>"; 
                                        echo "<td>".$row['smodel']."</td>"; 
                                        echo "<td>$".$row['TotalPrice']."</td>"; 
                                        echo "<td class='action'><a class='btno-edit' 
                                                href='#?id=".$row['cpuId']."&typ=cpu&idType=cpuId'>Sucess</a>
                                                <a class='btno-delete' 
                                                href='../server/deleteOrder.php?id=".$row['oId']."&typ=cpu&idType=cpuId'>Delete</a></td>";
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