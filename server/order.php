
<?php
session_start();


include "conn.php";

$cpucomp=$_POST['CPUcompany'];
$cpumodel=$_POST['CPUmodel'];

// echo $pass;


$sql="SELECT Name,address,contact,email,uname FROM users WHERE email='$email' or uname='$email' and password='$pass'  ;";
$res= mysqli_query($conn,$sql);
// echo $res;
if(mysqli_num_rows($res)==1){
   
    header('location:../index.php?success=true');//redirect to form' 
}
else{
    die("unable to login".mysqli_error($conn));
    
}
?>
