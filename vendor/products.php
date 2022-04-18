<!DOCTYPE html>
<?php
    session_start();
    include "../conn.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>
<body class="products">
   <div class="bodyV">
   <div class="bodyV">
        <?php
            include "vendorNavBar.php";
        ?>
         <div class="mainV">
                <div class="top">
                    <div class="welcome">
                        <h1 style="text-transform:capitalize;">Hello <?php echo $_SESSION['Name'];?> </h1>
                        <h3>Welcome to the vendor page!</h3>
                    </div>
                    <!-- popupbutton -->
                    <div class="buttonNewProduct" >
                        <a class="button"  href="#popup1">Add Product</a>
                     </div>
                    <!-- <div class="buttonNewProduct">
                        Add Products
                    </div> -->
                </div>
                <div class="mainTable">
                    
                    <div class="cpu table">

                        <h2>CPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Cpu ID</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Frequency</td>
                                    <td> Power Usage</td>
                                    <td> Quantity</td>
                                    <td> Price</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $id=$_SESSION['vid'];
                            $sql="SELECT  * FROM cpu where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){

                                    $com=$row['company'];
                                    echo "<td>".$row['cpuId']."</td>"; 
                                    echo "<td>".$com."</td>"; 
                                    echo "<td>".$row['model']."</td>"; 
                                    echo "<td>".$row['freq']."</td>"; 
                                    echo "<td>".$row['powUsage']."</td>"; 
                                    echo "<td>".$row['quantity']."</td>"; 
                                    echo "<td>$".$row['price']."</td>"; 
                                    echo "<td ><a class='btn-edit' 
                                        href='../server/vendorEdit.php?id=".$row['cpuId']."&typ=cpu&idType=cpuId'>Edit</a>||
                                        <a class='btn-delete' 
                                        href='vendorDelete.php?id=".$row['cpuId']."&typ=cpu&idType=cpuId'>Delete</a></td>";
                                    echo "</tr>";
                                }  
                            }
                            else{
                                echo "No CPU found";
                            }
                            ?>
                          </tr>
                      
                        </tr>
                        </table>
                    </div>
                    <div class="gpu table">

                        <h2>GPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> GPU ID</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size</td>
                                    <td> Memory Type</td>
                                    <td> Power Consumption</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $sql="SELECT  * FROM gpu where vid='$id';;";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                                $Pid=$row['gpuId'];
                                $com=$row['company'];
                                echo "<td>".$row['gpuId']."</td>"; 
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['memSize']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>".$row['powUsage']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                        href='../server/vendorEdit.php?id=".$Pid."&typ=gpu&idType=gpuId'>Edit</a>||
                                        <a class='btn-delete' 
                                        href='vendorDelete.php?id=".$Pid."&typ=gpu&idType=gpuId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="mot table">
                        <h2>Motherboard</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Motherboard ID</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Form Factor </td>
                                    <td> Memory Type</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                               
                            $sql="SELECT  * FROM motherboard where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['motId'];
                                $com=$row['company'];
                                echo "<td>".$row['motId']."</td>";
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['formFactor']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=motherboard&idType=motId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='vendorDelete.php?id=".$Pid."&typ=motherboard&idType=motId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="ram table">
                        <h2>RAM</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Ram Id</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size </td>
                                    <td> Memory Type</td>
                                    <td> Frequency</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            $id=$_SESSION['vid'];
                            $sql="SELECT  * FROM ram where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            // echo $id;
                            // echo mysqli_fetch_assoc($res);
                            // echo mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['ramId'];
                                $com=$row['company'];
                                echo "<td>".$row['ramId']."</td>"; 
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['memSize']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>$".$row['freq']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=motherboard&idType=ramId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='vendorDelete.php?id=".$Pid."&typ=motherboard&idType=ramId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="sto table">
                        <h2>Storage</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Storage Id</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td>Size </td>
                                    <td> Type</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            $id=$_SESSION['vid'];
                            $sql="SELECT * FROM storage where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            // echo $id;
                            // echo mysqli_fetch_assoc($res);
                            // echo mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['stoId'];
                                echo "<td>".$row['stoId']."</td>";
                                echo "<td>".$row['company']."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['size']."</td>"; 
                                echo "<td>".$row['driveType']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>";
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=storage&idType=ramId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='vendorDelete.php?id=".$Pid."&typ=storage&idType=ramId'>Delete</a></td>";
                                 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="psu table">
                        <h2>Power Supply</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Power Supply Id</td>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td>Rating </td>
                                    <td> Output</td>
                                    <td> Modular</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                    <td> Operation</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            $id=$_SESSION['vid'];
                            $sql="SELECT * FROM psu where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            // echo $id;
                            // echo mysqli_fetch_assoc($res);
                            // echo mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res)){
                                // print_r($row);
                                $Pid=$row['psuId'];
                                $com=$row['company'];
                                echo "<td>".$row['psuId']."</td>";
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['rating']."</td>"; 
                                echo "<td>".$row['output']."</td>"; 
                                echo "<td>$".$row['modu']."</td>"; 
                                echo "<td>$".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td ><a class='btn-edit' 
                                    href='../server/vendorEdit.php?id=".$Pid."&typ=psu&idType=psuId'>Edit</a>||
                                    <a class='btn-delete' 
                                    href='vendorDelete.php?id=".$Pid."&typ=psu&idType=psuId'>Delete</a></td>";
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                </div>
               
             

                <div id="popup1" class="overlay">
                    <div class="popup">
                      
                        <a class="close" href="#">&times;</a>
                        <h1>Add Products</h1>
                        <form action="addproducts.php"  method="post">
                            <label class="titleA" for="cat">Product Category</label></br>
                            <select class="catpop" name="category" id="category">
                                <option value="none" selected disabled hidden>Category</option>
                                <option value="cpu">CPU</option>
                                <option value="gpu">GPU</option>
                                <option value="ram">Ram</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="storage">Storage</option>
                                <option value="case">Case</option>
                                <option value="psu">Psu</option>
                            </select>
                            <br>
                            <div id="add"></div>
                            <input type="button" id="submit" value="Add Product">
                            <!-- <h3>Motherboard</h3>
                           <label >Company</label>
                           <input type="text" name="company"><br>
                           <label>Model</label>
                           <input type="text" name="model"><br>
                           <label>Form Factor</label>
                           <input type="text" name="formfactor"><br>
                           <label>Socket Type</label>
                           <input type="text" name="socketType"><br>
                           <label>Memory Type(support)</label>
                           <input type="text" name="memType"><br>
                           <label>Price</label>
                           <input type="text" name="price"><br>
                           <label>Quantity</label>
                           <input type="text" name="Quantity"><br> -->
                        </form>
                    </div>
                </div>
         </div>
   </div>
   <script src="../jquery.js" type='text/javascript'></script>

   <script>
        $('#category').change(function(){
           let typ=$('#category').val();
           let addhtml="";
            //    console.log(typ);
            if(typ=='cpu'){
                addhtml=`<h3>CPU</h3>
                           <label >Company</label>
                           <input type="text" id="company" name="company"><br>
                           <label>Model</label>
                           <input type="text" id="model" name="model"><br>
                           <label>Freq</label>
                           <input type="text" id="freq" name="freq"><br>
                           <label>Power Usage</label>
                           <input type="text" id="powUsage" name="powUsage"><br>
                           <label>Price</label>
                           <input type="text" id="price" name="price"><br>
                           <label>Quantity</label>
                           <input type="text" id="qty" name="Quantity"><br>`;
                console.log("dns");
            }
            else if(typ=='gpu'){
                addhtml=` <h3>GPU</h3>
                           <label >Company</label>
                           <input type="text" id="company" name="company"><br>
                           <label>Model</label>
                           <input type="text" id="model" name="model"><br>
                           <label>Memory Size</label>
                           <input type="text"id="memSize" name="memsize"><br>
                           <label>Memory Type</label>
                           <input type="text"id="memType" name="memtype"><br>
                           <label>Power Usage</label>
                           <input type="text" id="powUsage" name="powUsage"><br>
                           <label>Price</label>
                           <input type="text" id="price" name="price"><br>
                           <label>Quantity</label>
                           <input type="text" id="qty" name="Quantity"><br>`;
            }
            else if(typ=='ram'){
                addhtml=`       <h3>RAM</h3>
                           <label >Company</label>
                           <input type="text" id="company" name="company"><br>
                           <label>Model</label>
                           <input type="text" id="model" name="model"><br>
                           <label>Memory Size</label>
                           <input type="text" id="memSize" name="memsize"><br>
                           <label>Memory Type</label>
                           <input type="text" id="memType" name="memtype"><br>
                           <label>Frequency</label>
                           <input type="text" id="freq" name="freq"><br>
                           <label>Price</label>
                           <input type="text" id="price" name="price"><br>
                           <label>Quantity</label>
                           <input type="text" id="qty" name="Quantity"><br>`;
            }
            else if(typ=='motherboard'){
                addhtml=`<h3>Motherboard</h3>
                           <label >Company</label>
                           <input type="text" id="company" name="company"><br>
                           <label>Model</label>
                           <input type="text" id="model" name="model"><br>
                           <label>Form Factor</label>
                           <input type="text" id="formFactor"  name="formfactor"><br>
                           <label>Socket Type</label>
                           <input type="text" id="socket" name="socketType"><br>
                           <label>Memory Type(support)</label>
                           <input type="text" id="memType" name="memType"><br>
                           <label>Price</label>
                           <input type="text" id="price" name="price"><br>
                           <label>Quantity</label>
                           <input type="text" id="qty" name="Quantity"><br>`;
            }
            $('#add').html(addhtml);

            //    var select='';
                //    $.ajax({
                //        type:'POST',
                //        url: "server/pcbuilder/getSto.php",
                //        dataType:'json',
                //        data:{'typ':typ},

                //        success: function(data){
                //            console.log(data);
                //           $.each(data,function(index,value){
                //               console.log(value.model);
                //               console.log(value.price);
                //               select+=`<option value="${value.model}">${value.model}</option>`;
                //             //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                //           });
                //             $("#Stmodel").html(select);
                //        }
            //    });
        });
        $('#submit').on('click',function(){
            let vid=<?php echo $_SESSION['vid']?>;
            let category=$('#category').val();
            let company =$("#company").val();
            let model =$("#model").val();
            let freq =$("#freq").val();
            let powUsage =$("#powUsage").val();
            let memSize =$("#memSize").val();
            let memType =$("#memType").val();
            let formFactor =$("#formFactor").val();
            let socketType =$("#socketType").val();
            let price =$("#price").val();
            let qty =$("#qty").val();
                console.log(company,vid ,category);
            $.ajax({
                type:'POST',
                data:{
                    category:category,
                   vid:vid,
                   company:company,
                   model:model,
                   freq:freq,
                   powUsage:powUsage,
                   memSize:memSize,
                   memType:memType,
                   formFactor:formFactor,
                   socketType:socketType,
                   price:price,
                   qty:qty
                },
                url: "../server/addproducts.php",
                dataType: "json",
                success: function(data){
                    if(data){
                    result=data;
                    alert('Inserted Successfully');
                    location.reload();

                    // window.location.replace('home.php');
                    }
                    else{
                    alert('unsuccess');

                    }
                }
            });
        });
        
   </script>
</body>
</html>