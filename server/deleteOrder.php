
<?php
    include 'conn.php';
    $oid=$_GET['oid'];
    
    $sql="DELETE FROM orders WHERE oId=$oid";
    $res=mysqli_query($conn,$sql);
    
    if($res){
        header('location:../admin/.php?delete=true');
    }
    else{
        die('error'.mysqli_error($conn));
    }
    
?>
