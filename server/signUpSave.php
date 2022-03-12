<?php
include './conn.php';
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password =md5($_POST['pass']);
    if(!empty($fname) && !empty($address) && !empty($contact) && !empty($email) && !empty($password)){
        $sql="INSERT INTO users (uname,Name,password,email,address,contact) VALUES('$uname','$fname','$password','$email','$address','$contact')";
        $res= mysqli_query($conn,$sql);
        if(!$res){
            die("unable to INSERT".mysqli_error($conn));
        }
        else{
            // echo "Value inserted";
        header('location:login.php?success=true');//redirect to form
        echo '<script>alert("Signup Successful");</script>';
        }

    }

        

?>