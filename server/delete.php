
<?php
    include 'conn.php';
    $id=$_GET['id'];
    $cat=$_GET['typ'];
    $idType=$_GET['idType'];

    
    $sql="DELETE FROM $cat WHERE $idType=$id";
    $res=mysqli_query($conn,$sql);
    
    if($res){
        header('location:../vendor/products.php?delete=true');
    }
    else{
        die('error'.mysqli_error($conn));
    }
    
?>
