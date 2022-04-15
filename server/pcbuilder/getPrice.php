
<?php
include '../conn.php';

$comp=$_POST['comp'];
$id=$_POST['id'];
$colName=$_POST['colN'];
// $id=$_POST['id'];
// echo $comp;
// echo $id;
// echo $colName;
$sql="SELECT * FROM $comp WHERE $colName='$id' ;";
// echo $sql;
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