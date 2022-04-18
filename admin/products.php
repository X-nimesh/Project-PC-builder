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
<body class="Aproducts">

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
                <div class="mainTable">
                    
                <div class="mainTable">
                    
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
                    <div class="gpu table">

                        <h2>GPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> GPU ID</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size</td>
                                    <td> Memory Type</td>
                                    <td> Power Consumption</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $sql="SELECT  * FROM gpu ;";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                                $Pid=$row['gpuId'];
                                $com=$row['company'];
                                echo "<td>".$row['gpuId']."</td>"; 
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['memSize']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>".$row['powUsage']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                        href='../server/vendorEdit.php?id=".$Pid."&typ=gpu&idType=gpuId'>Edit</a>||
                                        <a class='btn-delete' 
                                        href='../server/delete.php?id=".$Pid."&typ=gpu&idType=gpuId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="mot table">
                        <h2>Motherboard</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Motherboard ID</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Form Factor </td>
                                    <td> Memory Type</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                               
                            $sql="SELECT  * FROM motherboard ";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['motId'];
                                $com=$row['company'];
                                echo "<td>".$row['motId']."</td>";
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['formFactor']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=motherboard&idType=motId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='../server/delete.php?id=".$Pid."&typ=motherboard&idType=motId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="ram table">
                        <h2>RAM</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Ram Id</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size </td>
                                    <td> Memory Type</td>
                                    <td> Frequency</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            $id=$_SESSION['vid'];
                            $sql="SELECT  * FROM ram ";
                            $res= mysqli_query($conn,$sql);
                            // echo $id;
                            // echo mysqli_fetch_assoc($res);
                            // echo mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['ramId'];
                                $com=$row['company'];
                                echo "<td>".$row['ramId']."</td>"; 
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['memSize']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>$".$row['freq']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=ram&idType=ramId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='../server/delete.php?id=".$Pid."&typ=ram&idType=ramId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="sto table">
                        <h2>Storage</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Storage Id</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td>Size </td>
                                    <td> Type</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            $id=$_SESSION['vid'];
                            $sql="SELECT * FROM storage ";
                            $res= mysqli_query($conn,$sql);
                            // echo $id;
                            // echo mysqli_fetch_assoc($res);
                            // echo mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['stoId'];
                                echo "<td>".$row['stoId']."</td>";
                                echo "<td>".$row['company']."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['size']."</td>"; 
                                echo "<td>".$row['driveType']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>";
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=storage&idType=stoId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='../server/delete.php?id=".$Pid."&typ=storage&idType=stoId'>Delete</a></td>";
                                 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="psu table">
                        <h2>Power Supply</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Power Supply Id</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td>Rating </td>
                                    <td> Output</td>
                                    <td> Modular</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            $id=$_SESSION['vid'];
                            $sql="SELECT * FROM psu ";
                            $res= mysqli_query($conn,$sql);
                            // echo $id;
                            // echo mysqli_fetch_assoc($res);
                            // echo mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['psuId'];
                                $com=$row['company'];
                                echo "<td>".$row['psuId']."</td>";
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['rating']."</td>"; 
                                echo "<td>".$row['output']."</td>"; 
                                echo "<td>$".$row['modu']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=psu&idType=psuId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='../server/delete.php?id=".$Pid."&typ=psu&idType=psuId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>