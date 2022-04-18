
<?php
session_start();


include "conn.php";

// $cpucomp=$_POST['CPUcompany'];
$cpuid=$_POST['CPUmodel'];
$ramid=$_POST['RAMmodel'];
$gpuid=$_POST['GPUmodel'];
$psuid=$_POST['PSUmodel'];
$mid=$_POST['Mmodel'];
$stid=$_POST['Stmodel'];
$uid=$_SESSION['uid'];
print_r( $_POST);
$totalPrice=0;
$date= getdate(date("U"))[0];
// echo $pass;
if(empty($uid)){
    echo "Please login first";
    header("Location: ../LoginPage.php");
}

if(!empty($cpuid) && !empty($ramid) && !empty($gpuid) && !empty($psuid) && !empty($mid) && !empty($stid)){

    // totalprice
        $sql="SELECT * FROM cpu WHERE cpuId='$cpuid';";
        $res= mysqli_query($conn,$sql);
        // echo $res;
        if(mysqli_num_rows($res)==1){
            // echo gettype(mysqli_fetch_assoc($res)['price']);
            // $p=mysqli_fetch_assoc($res)['price'];
            $conv=str_replace("$","",mysqli_fetch_assoc($res)['price']);
            // echo $conv;
            $totalPrice+=$conv;
        //    $totalPrice=$totalPrice+mysqli_fetch_assoc($res)['price'];
        //    echo $totalPrice;
        }
        else{
            die("unable to login".mysqli_error($conn));
            
        }
        // ram
        $sql="SELECT * FROM ram WHERE ramId='$ramid';";
        $res= mysqli_query($conn,$sql);
        // echo $res;
        if(mysqli_num_rows($res)==1){
            // echo gettype(mysqli_fetch_assoc($res)['price']);
            // $p=mysqli_fetch_assoc($res)['price'];
            $conv=str_replace("$","",mysqli_fetch_assoc($res)['price']);
            // echo $conv;
            $totalPrice+=$conv;
        //    $totalPrice=$totalPrice+mysqli_fetch_assoc($res)['price'];
        //    echo $totalPrice;
        }
        else{
            die("unable to login".mysqli_error($conn));
            
        }



        // gpu
        $sql="SELECT * FROM gpu WHERE gpuId='$gpuid';";
        $res= mysqli_query($conn,$sql);
        // echo $res;
        if(mysqli_num_rows($res)==1){
            // echo gettype(mysqli_fetch_assoc($res)['price']);
            // $p=mysqli_fetch_assoc($res)['price'];
            $conv=str_replace("$","",mysqli_fetch_assoc($res)['price']);
            // echo $conv;
            $totalPrice+=$conv;
        //    $totalPrice=$totalPrice+mysqli_fetch_assoc($res)['price'];
        //    echo $totalPrice;
        }
        else{
            die("unable to login".mysqli_error($conn));
            
        }
        // psu
        $sql="SELECT * FROM psu WHERE psuId='$psuid';";
        $res= mysqli_query($conn,$sql);
        // echo $res;
        if(mysqli_num_rows($res)==1){
            // echo gettype(mysqli_fetch_assoc($res)['price']);
            // $p=mysqli_fetch_assoc($res)['price'];
            $conv=str_replace("$","",mysqli_fetch_assoc($res)['price']);
            // echo $conv;
            $totalPrice+=$conv;
        //    $totalPrice=$totalPrice+mysqli_fetch_assoc($res)['price'];
        //    echo $totalPrice;
        }
        else{
            die("unable to login".mysqli_error($conn));
            
        }
        // motherboard
        $sql="SELECT * FROM motherboard WHERE motId='$mid';";
        $res= mysqli_query($conn,$sql);
        // echo $res;
        if(mysqli_num_rows($res)==1){
            // echo gettype(mysqli_fetch_assoc($res)['price']);
            // $p=mysqli_fetch_assoc($res)['price'];
            $conv=str_replace("$","",mysqli_fetch_assoc($res)['price']);
            // echo $conv;
            $totalPrice+=$conv;
        //    $totalPrice=$totalPrice+mysqli_fetch_assoc($res)['price'];
        //    echo $totalPrice;
        }
        else{
            die("unable to login".mysqli_error($conn));
            
        }
        // storage
        $sql="SELECT * FROM storage WHERE stoId='$stid';";
        $res= mysqli_query($conn,$sql);
        // echo $res;
        if(mysqli_num_rows($res)==1){
            // echo gettype(mysqli_fetch_assoc($res)['price']);
            // $p=mysqli_fetch_assoc($res)['price'];
            $conv=str_replace("$","",mysqli_fetch_assoc($res)['price']);
            // echo $conv;
            $totalPrice+=$conv;
        //    $totalPrice=$totalPrice+mysqli_fetch_assoc($res)['price'];
        echo $totalPrice;
        }
        else{
            die("unable to login".mysqli_error($conn));
            
        }
    // 

    // insert data
            $sql="INSERT INTO orders ( `TotalPrice`, `date`, `cpuId`, `ramId`, `gpuId`, `motherId`, `psuId`, `StorId`, `uId`) VALUES('$totalPrice','$date','$cpuid','$ramid','$gpuid','$mid','$psuid','$stid','$uid');";
            $res= mysqli_query($conn,$sql);
            if(!$res){
                die("unable to INSERT".mysqli_error($conn));
            }
            else{
                echo "Value inserted";
            header('location:../profile.php?success=true');//redirect to form
           
            }

    // 
}
else{
    die( "Please fill all the fields");
}
?>
