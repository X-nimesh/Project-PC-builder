
<?php
include '../conn.php';

$pow=$_POST['pow'];
// echo $comp;
// $id=$_POST['id'];

$sql="SELECT DISTINCT model,price,psuId,output FROM psu WHERE output='$pow';";
$res= mysqli_query($conn,$sql);
$model=[];
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        // print_r($row);
        $model[]=$row;
    }
}
echo json_encode($model);

?>