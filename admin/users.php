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
<body class="Ausers">
<?php
        if(!empty($_GET)){
            echo "<div id='top-msg'  class='top-msg'>";
            if(!empty($_GET['update'])){
                ?>
                <div class="successh" role="alert">
                Updated Successfully
                </div>
            <?php
            }
            if(!empty($_GET['delete'])){
                ?>
                <div class="errorh" role="alert">
                Deleted Successfully
                </div>
            <?php
            
            }
            echo "</div>";
        }
    ?>
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
                                        <td> User ID</td>
                                        <td> Name</td>
                                        <td> Address</td>
                                        <td> Contact</td>
                                        <td> E-mail/td>
                                        <td>Uname</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                            <tr>
                                <?php
                                    include "../conn.php";    
                                    $sql="SELECT  * FROM users ";
                                    $res= mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($res)>0){
                                        while($row=mysqli_fetch_assoc($res)){

                                            echo "<td>".$row['id']."</td>"; 
                                            echo "<td>".$row['Name']."</td>"; 
                                            echo "<td>".$row['address']."</td>"; 
                                            echo "<td>".$row['contact']."</td>"; 
                                            echo "<td>".$row['email']."</td>"; 
                                            echo "<td>".$row['uname']."</td>"; 
                                            echo "<td ><a class='btn-edit' 
                                                href='../server/userEdit.php?id=".$row['id']."'>Edit</a>||
                                                <a class='btn-delete' 
                                                href='../server/deleteUser.php?id=".$row['id']."'>Delete</a></td>";
                                            echo "</tr>";
                                        }  
                                    }
                                    else{
                                        echo "No CPU found";
                                    }
                                ?>
                            </tr>
                        
                           
                            </table>
                        </div>
                    
                </div>
         </div>
    </div>
    <script src="../script.js"></script>

</body>
</html>