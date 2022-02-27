
<?php
session_start();


include "conn.php";

$email=$_POST['email'];
$pass=md5($_POST['pass']);

// echo $password;


$sql="SELECT Name,address,contact,email,uname,userType FROM users WHERE email='$email' and password='$pass';";
$res= mysqli_query($conn,$sql);
// echo $res;
if(mysqli_num_rows($res)==1){
    while($row=mysqli_fetch_assoc($res)){
        
        // print_r($row);
        $_SESSION['Name']=$row['Name'];
        $_SESSION['add']=$row['address'];
        $_SESSION['contact']=$row['contact'];
        $_SESSION['email']=$row['email'];
        $_SESSION['uname']=$row['uname'];
        $_SESSION['userType']=$row['userType'];
        
    }   
    $_SESSION['logged_in']=1;

    // echo "welcome $_SESSION[uname] $_SESSION[email] ";
    header('location:../index.php?success=true');//redirect to form' 
}
else{
    die("unable to login".mysqli_error($conn));
    
}
?>
