<?php
include "conn.php";
$id=$_GET['id'];
$cat=$_GET['typ'];
// echo $id;
// echo $cat;
switch ($cat) {
    case 'cpu':
       cpu($id,$conn);
        break;
    case 'gpu':
       gpu($id,$conn);
        break;
    case 'ram':
       ram($id,$conn);
        break;
    case 'motherboard':
       motherboard($id,$conn);
        break;
    case 'storage':
       storage($id,$conn);
        break;
    case 'psu':
       psu($id,$conn);
        break;
    default:
        header('location:products.php?update=false');
        break;
}
function cpu($id,$conn){
    
    $company=$_POST['company'];
    $model=$_POST['model'];
    $freq=$_POST['freq'];
    $powUsage=$_POST['powUsage'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="UPDATE cpu SET company='$company',model='$model', freq='$freq'
            ,powUsage='$powUsage',price='$price',
            quantity='$qty' WHERE cpuId=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        // header('location:list.php?update=true');
        echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }
}

function gpu($id,$conn){
    
    $company=$_POST['company'];
    $model=$_POST['model'];
    $memSize=$_POST['memSize'];
    $memType=$_POST['memType'];
    $powUsage=$_POST['powUsage'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="UPDATE gpu SET company='$company',model='$model', memSize='$memSize'
             ,memType='$memType',powUsage='$powUsage',price='$price',
            quantity='$qty' WHERE gpuId=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        // header('location:list.php?update=true');
        echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }
}
function ram($id,$conn){
    
    $company=$_POST['company'];
    $model=$_POST['model'];
    $memSize=$_POST['memSize'];
    $memType=$_POST['memType'];
    $freq=$_POST['freq'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="UPDATE ram SET company='$company',model='$model', memSize='$memSize'
             ,memType='$memType',freq='$freq',price='$price',
            quantity='$qty' WHERE ramId=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        // header('location:list.php?update=true');
        echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }
}
function motherboard($id,$conn){
    
    $company=$_POST['company'];
    $model=$_POST['model'];
    $formFactor=$_POST['formFactor'];
    $memType=$_POST['memType'];
    $support=$_POST['support'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="UPDATE motherboard SET company='$company',model='$model', formFactor='$formFactor'
             ,memType='$memType',support='$support',price='$price',
            quantity='$qty' WHERE motId=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        // header('location:list.php?update=true');
        echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }
}
function storage($id,$conn){
    
    $company=$_POST['company'];
    $model=$_POST['model'];
    $size=$_POST['size'];
    $driveType=$_POST['driveType'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="UPDATE storage SET company='$company',model='$model', size='$size'
             ,driveType='$driveType',price='$price',
            quantity='$qty' WHERE stoId=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        // header('location:list.php?update=true');
        echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }
}
function psu($id,$conn){
    
    $company=$_POST['company'];
    $model=$_POST['model'];
    $rating=$_POST['rating'];
    $output=$_POST['output'];
    $modu=$_POST['modu'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="UPDATE psu SET company='$company',model='$model', rating='$rating'
             ,output='$output',modu='$modu',price='$price',
            quantity='$qty' WHERE psuId=$id";
    $res=mysqli_query($conn,$sql);

    if($res){
        // header('location:list.php?update=true');
        echo "updated";
    }
    else{
        die('error'.mysqli_error($conn));
    }
}
?>