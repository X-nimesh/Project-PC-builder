
<?php

include "conn.php";

        
$id=$_GET['id'];
$cat=$_GET['typ'];
$idType=$_GET['idType'];

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
    global $id;
    global $cat;
    $sql="SELECT * FROM cpu WHERE cpuId='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
        <form action="update.php?id=<?php echo $id?>&typ=<?php echo $cat?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <h1>CPU </h1>
                </legend>
                
        <label for="name" style="color:#00008B" ><b>Company:</b></label>
        <input type="text" id="name" name="company" tabindex="1" value="<?php echo $row['company']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Model:</b></label>
        <input type="text" id="agel" name="model"  tabindex="2" value="<?php echo $row['model']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Freq:</b></label>
        <input type="text" id="agel" name="freq"  tabindex="3" value="<?php echo $row['freq']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Power Usage:</b></label>
        <input type="text" id="agel" name="powUsage"  tabindex="4" value="<?php echo $row['powUsage']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Price: $</b></label>
        <input type="text" id="agel" name="price"  tabindex="5" value="<?php echo $row['price']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Quantity: </b></label>
        <input type="text" id="agel" name="qty"  tabindex="6" value="<?php echo $row['quantity']?>"><br>
        <br>
    
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
    <?php

}
function gpu($id,$conn){
    global $id;
    global $cat;
    $sql="SELECT * FROM gpu WHERE gpuId='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
        <form action="update.php?id=<?php echo $id?>&typ=<?php echo $cat?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <h1>GPU </h1>
                </legend>
                
        <label for="name" style="color:#00008B" ><b>Company:</b></label>
        <input type="text" id="name" name="company" tabindex="1" value="<?php echo $row['company']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Model:</b></label>
        <input type="text" id="agel" name="model"  tabindex="2" value="<?php echo $row['model']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Memory Size:</b></label>
        <input type="text" id="agel" name="memSize"  tabindex="3" value="<?php echo $row['memSize']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Memory Type</b></label>
        <input type="text" id="agel" name="memType"  tabindex="3" value="<?php echo $row['memType']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Power Usage:</b></label>
        <input type="text" id="agel" name="powUsage"  tabindex="4" value="<?php echo $row['powUsage']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Price: $</b></label>
        <input type="text" id="agel" name="price"  tabindex="5" value="<?php echo $row['price']?>"><br> 
        <br>
    
        <label for="age"style="color: #00008B" ><b>Quantity</b></label>
        <input type="text" id="agel" name="qty"  tabindex="5" value="<?php echo $row['quantity']?>"><br> 
        <br>
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
        <?php

}
function ram($id,$conn){
    global $id;
    global $cat;
    $sql="SELECT * FROM ram WHERE ramId='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
        <form action="update.php?id=<?php echo $id?>&typ=<?php echo $cat?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <hh1>RAM </hh1>
                </legend>
                
        <label for="name" style="color:#00008B" ><b>Company:</b></label>
        <input type="text" id="name" name="company" tabindex="1" value="<?php echo $row['company']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Model:</b></label>
        <input type="text" id="agel" name="model"  tabindex="2" value="<?php echo $row['model']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Memory Size:</b></label>
        <input type="text" id="agel" name="memSize"  tabindex="3" value="<?php echo $row['memSize']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Memory Type</b></label>
        <input type="text" id="agel" name="memType"  tabindex="3" value="<?php echo $row['memType']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Frequency(Mhz)</b></label>
        <input type="text" id="agel" name="freq"  tabindex="4" value="<?php echo $row['freq']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Price: $</b></label>
        <input type="text" id="agel" name="price"  tabindex="5" value="<?php echo $row['price']?>"><br> 
        <br>
    
        <label for="age"style="color: #00008B" ><b>Quantity</b></label>
        <input type="text" id="agel" name="qty"  tabindex="5" value="<?php echo $row['quantity']?>"><br> 
        <br>
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
        <?php

}
function motherboard($id,$conn){
    global $id;
    global $cat;
    global $idType;
    $sql="SELECT * FROM $cat WHERE $idType='$id'";
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
        <form action="update.php?id=<?php echo $id?>&typ=<?php echo $cat?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <h1>Motherboard </h1>
                </legend>
                
        <label for="name" style="color:#00008B" ><b>Company:</b></label>
        <input type="text" id="name" name="company" tabindex="1" value="<?php echo $row['company']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Model:</b></label>
        <input type="text" id="agel" name="model"  tabindex="2" value="<?php echo $row['model']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Form Factor:</b></label>
        <input type="text" id="agel" name="formFactor"  tabindex="3" value="<?php echo $row['formFactor']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Memory Type</b></label>
        <input type="text" id="agel" name="memType"  tabindex="3" value="<?php echo $row['memType']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Support:</b></label>
        <input type="text" id="agel" name="support"  tabindex="4" value="<?php echo $row['support']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Price: $</b></label>
        <input type="text" id="agel" name="price"  tabindex="5" value="<?php echo $row['price']?>"><br> 
        <br>
    
        <label for="age"style="color: #00008B" ><b>Quantity</b></label>
        <input type="text" id="agel" name="qty"  tabindex="5" value="<?php echo $row['quantity']?>"><br> 
        <br>
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
        <?php

}
function storage($id,$conn){
    global $id;
    global $cat;
    global $idType;
    $sql="SELECT * FROM $cat WHERE $idType='$id'";
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
        <form action="update.php?id=<?php echo $id?>&typ=<?php echo $cat?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <h1>Storage</h1>
                </legend>
                
        <label for="name" style="color:#00008B" ><b>Company:</b></label>
        <input type="text" id="name" name="company" tabindex="1" value="<?php echo $row['company']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Model:</b></label>
        <input type="text" id="agel" name="model"  tabindex="2" value="<?php echo $row['model']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Size:</b></label>
        <input type="text" id="agel" name="size"  tabindex="3" value="<?php echo $row['size']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Drive Type</b></label>
        <input type="text" id="agel" name="driveType"  tabindex="3" value="<?php echo $row['driveType']?>"><br>
        <br>
    
      
        <label for="age"style="color: #00008B" ><b>Price: $</b></label>
        <input type="text" id="agel" name="price"  tabindex="5" value="<?php echo $row['price']?>"><br> 
        <br>
    
        <label for="age"style="color: #00008B" ><b>Quantity</b></label>
        <input type="text" id="agel" name="qty"  tabindex="5" value="<?php echo $row['quantity']?>"><br> 
        <br>
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
        <?php

}
function psu($id,$conn){
    global $id;
    global $cat;
    global $idType;
    $sql="SELECT * FROM $cat WHERE $idType='$id'";
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
        <form action="update.php?id=<?php echo $id?>&typ=<?php echo $cat?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <h1>Power Supply </h1>
                </legend>
                
        <label for="name" style="color:#00008B" ><b>Company:</b></label>
        <input type="text" id="name" name="company" tabindex="1" value="<?php echo $row['company']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Model:</b></label>
        <input type="text" id="agel" name="model"  tabindex="2" value="<?php echo $row['model']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Rating:</b></label>
        <input type="text" id="agel" name="rating"  tabindex="3" value="<?php echo $row['rating']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Output</b></label>
        <input type="text" id="agel" name="output"  tabindex="3" value="<?php echo $row['output']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Modular:</b></label>
        <input type="text" id="agel" name="modu"  tabindex="4" value="<?php echo $row['modu']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Price: $</b></label>
        <input type="text" id="agel" name="price"  tabindex="5" value="<?php echo $row['price']?>"><br> 
        <br>
    
        <label for="age"style="color: #00008B" ><b>Quantity</b></label>
        <input type="text" id="agel" name="qty"  tabindex="5" value="<?php echo $row['quantity']?>"><br> 
        <br>
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
        <?php

}

        ?>