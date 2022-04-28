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
    <title>Pc Builder Vendor</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>
<body class="Avendors">

   <div class="bodyA">
        <?php
            include "adminNavbar.php";
        ?>
         <div class="mainA">
                <div class="top">
                    <div class="welcome">
                        <h1 style="text-transform:capitalize;">Hello <?php echo $_SESSION['name'];?> </h1>
                        <h3>Welcome to the Admin page!</h3>
                    </div>
                
                  
                </div>
                <div class="mainTableA">
                       
                        <div class="cpu table">

                            <h2>Admin</h2>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td> Vendor ID</td>
                                        <td> Name</td>
                                        <td> Address</td>
                                        <td> Contact</td>
                                        <td> E-mail</td>
                                        <td> Action</td>
                                       
                                    </tr>
                                </thead>
                            <tr>
                            <?php
                                include "../conn.php";    
                         
                                $sql="SELECT * FROM vendor ";
                                $res= mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                    while($row=mysqli_fetch_assoc($res)){

                                        echo "<td>".$row['vid']."</td>"; 
                                        echo "<td>".$row['Name']."</td>"; 
                                        echo "<td>".$row['address']."</td>"; 
                                        echo "<td>".$row['contact']."</td>"; 
                                        echo "<td>".$row['email']."</td>"; 
                                       
                                        echo "<td ><a class='btn-edit' 
                                            href='../server/vendorEdit.php?id=".$row['vid']."&typ=cpu&idType=cpuId'>Edit</a>||
                                            <a class='btn-delete' 
                                            href='../server/delete.php?id=".$row['vid']."&typ=cpu&idType=cpuId'>Delete</a></td>";
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
    <script src="../script.js"></script>

</body>
</html>