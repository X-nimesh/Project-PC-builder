<?php
$server='localhost:8111';
$username='root';
$password="";
$dbname="projectpc";
$conn=mysqli_connect($server,$username,$password,$dbname);
// check connection
if(!$conn){
    die('Connection failed '.mysqli_connect_error($conn));
}

?>
