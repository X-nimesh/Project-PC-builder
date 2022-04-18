<?php
    session_start();

    include "conn.php";
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    echo $pass;
    $sql="SELECT Name,address,contact,email,vid FROM vendor WHERE email='$email' OR name='$email' and pass='$pass'  ;";
    $res= mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)==1){
        $row=mysqli_fetch_assoc($res);
            
            // print_r($row);
            $_SESSION['Name']=$row['Name'];
            $_SESSION['Add']=$row['address'];
            $_SESSION['Contact']=$row['contact'];
            $_SESSION['Email']=$row['email'];
            $_SESSION['vid']=$row['vid'];

            // $_SESSION['uname']=$row['uname'];
        
            
        $_SESSION['Vlogged_in']=1;

        header('location:../vendor/home.php?success=true');//redirect to form' 
    }
    else{
        die("unable to login".mysqli_error($conn));
        
    }
?>