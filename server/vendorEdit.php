<?php
include "conn.php";
$id=$_GET['id'];
$cat=$_GET['typ'];
$idType=$_GET['idType'];

switch ($cat) {
    case 'cpu':{

        $sql="SELECT * FROM cpu WHERE id='$id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['name'];
        $price=$row['price'];
        break;
    }
    
    default:
        # code...
        break;
}

$sql="SELECT * FROM $cat WHERE $idtype =$id";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
?>
<form action="update.php?id=<?php echo $id?>" method="post" >
        <fieldset  >
            <legend style="color:#00008B" >
                <b>Admission Form</b>
            </legend>
            
    <label for="name" style="color:#00008B" ><b>Name:</b></label>
    <input type="text" id="name" name="name" tabindex="1" value="<?php echo $row['name']?>" ><br>
    <br>

    <label for="age"style="color: #00008B" ><b>Age:</b></label>
    <input type="text" id="agel" name="age"  tabindex="2" value="<?php echo $row['age']?>"><br>
    <br>
   
    <input type="submit"  value="update">
    <input type="reset">
    <br>

    </fieldset>
    </form> 
    <?php
    }
    }

?>