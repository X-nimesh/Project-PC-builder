<?php 
    include "conn.php";

    $sql="SELECT COUNT(cpuId) as total FROM cpu;";
    $res= mysqli_query($conn,$sql);
    // echo $res;
    $data=mysqli_fetch_assoc($res);
    echo $data['total'];
    ?>