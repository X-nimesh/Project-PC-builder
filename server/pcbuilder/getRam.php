
<?php
include '../conn.php';

$siz=$_POST['siz'];
// $id=$_POST['id'];

$sql="SELECT DISTINCT model FROM ram WHERE memsize='$siz';";
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