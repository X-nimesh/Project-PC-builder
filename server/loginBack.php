
<?php
session_start();


include "conn.php";

$email=$_POST['email'];
$pass=md5($_POST['pass']);

// echo $password;


$sql="SELECT name,uname,email FROM users WHERE email='$email' and password='$pass';";
$res= mysqli_query($conn,$sql);
// echo $res;
if(mysqli_num_rows($res)==1){
    while($row=mysqli_fetch_assoc($res)){
        
        $_SESSION['email']=$row['email'];
        $_SESSION['uname']=$row['uname'];
        
    }   
    $_SESSION['logged_in']=1;
    // echo "welcome $_SESSION[uname] ";
    header('location:../index.php?success=true');//redirect to form' 
}
else{
    die("unable to login".mysqli_error($conn));
    
}
?>
