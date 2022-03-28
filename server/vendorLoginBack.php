<?php
    include "conn.php";
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    echo $pass;
    $sql="SELECT Name,address,contact,email FROM vendor WHERE email='$email' OR name='$email' and pass='$pass'  ;";
    $res= mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)==1){
        $row=mysqli_fetch_assoc($res);
            
            // print_r($row);
            $_SESSION['Name']=$row['Name'];
            $_SESSION['add']=$row['address'];
            $_SESSION['contact']=$row['contact'];
            $_SESSION['email']=$row['email'];
            // $_SESSION['uname']=$row['uname'];
        
            
        $_SESSION['Vlogged_in']=1;

        header('location:../vendor/home.php?success=true');//redirect to form' 
    }
    else{
        die("unable to login".mysqli_error($conn));
        
    }
?>