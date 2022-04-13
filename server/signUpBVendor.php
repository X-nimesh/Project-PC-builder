<?php
include './conn.php';
    $name = $_POST['name'];
    $add = $_POST['add'];
    $num = $_POST['number'];
    $email = $_POST['email'];
    $password =$_POST['pass'];
    if(empty($fname) && empty($address) && empty($contact) && empty($email) && empty($password)){
        
        die('All field Should filled.');
    }
    else{
        $sql="INSERT INTO vendor ( `Name`, `address`, `contact`, `email`, `pass`) VALUES('$name','$add','$number','$email','$pass')";
        $res= mysqli_query($conn,$sql);
        if(!$res){
            die("unable to INSERT".mysqli_error($conn));
        }
        else{
            // echo "Value inserted";
        header('location:../vendor/index.php?success=true');//redirect to form
        echo '<script>alert("Signup Successful");</script>';
        }
    }

        

?>