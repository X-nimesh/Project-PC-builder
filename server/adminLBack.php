<?php

    session_start();

    include "conn.php";

    $uname=$_POST['uname'];
    $pass=md5($_POST['pass']);

    // echo $_POST['pass'];
    // echo $pass;
    // echo $uname;

    $sql="SELECT name,uname FROM admin WHERE uname='$uname' or name='$uname' and pass='$pass';";
    $res= mysqli_query($conn,$sql);
    // echo $res;
    if(mysqli_num_rows($res)==1){
        // while($row=mysqli_fetch_assoc($res)){
        $row=mysqli_fetch_assoc($res);
            
            print_r($row);
            $_SESSION['name']=$row['name'];
            $_SESSION['uname']=$row['uname'];
        
            
        // }   
        $_SESSION['logged_in']=1;

        echo "welcome $_SESSION[uname] ";
        header('location:../admin/adminHome.php?success=true');//redirect to form' 
    }
    else{
        die("unable to login".mysqli_error($conn));
        
    }
?>