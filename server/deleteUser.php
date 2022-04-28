
<?php
    include 'conn.php';
    $id=$_GET['id'];
    
    $sql="DELETE FROM users WHERE id=$id";
    $res=mysqli_query($conn,$sql);
    
    if($res){
        header('location:../admin/users.php?delete=true');
    }
    else{
        die('error'.mysqli_error($conn));
    }
    
?>
