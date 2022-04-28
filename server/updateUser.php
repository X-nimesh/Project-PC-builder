<?php
    include "conn.php";
    $id=$_GET['id'];
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="UPDATE users SET name='$name',uname='$uname', address='$address'
            ,contact='$contact',email='$email',
            password='$password' WHERE id=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        header('location:../admin/users.php?update=true');
        // echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }

    ?>