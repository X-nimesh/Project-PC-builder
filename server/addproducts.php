<?php
include 'conn.php';

$category=$_POST['category'];
$vid=$_POST['vid'];
$company=$_POST['company'];
$model=$_POST['model'];

$price=$_POST['price'];
$qty=$_POST['qty'];

if($category=='cpu'){
    $freq=$_POST['freq'];
    $powUsage=$_POST['powUsage'];

$sql="INSERT INTO `$category` (`vid`, `company`, `model`, `freq`, `powUsage`, `price`, `quantity`) VALUES ('$vid', '$company', '$model', '$freq', '$powUsage', '$price', '$qty');";
}
if($category=='gpu'){
    $memSize=$_POST['memSize'];
    $memType=$_POST['memType'];
    $powUsage=$_POST['powUsage'];

$sql="INSERT INTO `$category`(`vid`, `company`, `model`, `memSize`, `memType`, `powUsage`, `price`, `quantity`) VALUES ('$vid', '$company', '$model', '$memSize', '$memType', '$powUsage', '$price', '$qty');";
}
if($category=='ram'){
    $memSize=$_POST['memSize'];
    $memType=$_POST['memType'];
    $powUsage=$_POST['powUsage'];

$sql="INSERT INTO `ram`( `vid`, `company`, `model`, `memSize`, `memType`, `freq`, `price`, `quantity`) VALUES ( '$vid', '$company', '$model', '$memSize', '$memType', '$freq', '$price', '$qty');";
}
if($category=='motherboard'){
    $memType=$_POST['memType'];
    $powUsage=$_POST['powUsage'];
    $formFactor=$_POST['formFactor'];
    $socketType=$_POST['socketType'];


$sql="INSERT INTO `$category` (`vid`, `company`, `model`, `freq`, `powUsage`, `price`, `quantity`) VALUES ('$vid', '$company', '$model', '$freq', '$powUsage', '$price', '$qty');";
}
// echo $sql;
$res= mysqli_query($conn,$sql);
// $table=[];
// if(mysqli_num_rows($res)>0){
//     while($row=mysqli_fetch_assoc($res)){
//         // print_r($row);
//         $table[]=$row;
//     }
// }
echo json_encode($res);
?>