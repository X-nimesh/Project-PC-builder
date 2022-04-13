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
<body>

   <div class="bodyA">
        <?php
            include "adminNavbar.php";
        ?>
         <div class="mainA">
                <div class="top">
                    <div class="welcome">
                        <h1 style="text-transform:capitalize;">Hello <?php echo $_SESSION['name'];?> </h1>
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
                    
                    <div class="cpu">

                        <h2>CPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Frequency</td>
                                    <td> Power Usage</td>
                                    <td> Power Quantity</td>
                                    <td> Price</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            // $id=$_SESSION['vid'];
                            $sql="SELECT  * FROM cpu ;";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){

                                $com=$row['company'];
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['freq']."</td>"; 
                                echo "<td>".$row['powUsage']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "<td>".$row['price']."</td>"; 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                    <div class="gpu">

                        <h2>GPU</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size</td>
                                    <td> Memory Type</td>
                                    <td> Power Consumption</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $sql="SELECT  * FROM gpu where vid='$id';;";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){

                                $com=$row['company'];
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['memSize']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>".$row['powUsage']."</td>"; 
                                echo "<td>".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                   
                    <div class="mot">
                        <h2>Motherboard</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <td> Company</td>
                                    <td> Model</td>
                                    <td> Memory Size</td>
                                    <td> Memory Type</td>
                                    <td> Power Consumption</td>
                                    <td> Price</td>
                                    <td> Quantity</td>
                                </tr>
                            </thead>
                          <tr>
                          <?php
                            include "../conn.php";    
                            $sql="SELECT  * FROM motherboard where vid='$id';";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res)){

                                $com=$row['company'];
                                echo "<td>".$com."</td>"; 
                                echo "<td>".$row['model']."</td>"; 
                                echo "<td>".$row['formfactor']."</td>"; 
                                echo "<td>".$row['socketType']."</td>"; 
                                echo "<td>".$row['memType']."</td>"; 
                                echo "<td>".$row['price']."</td>"; 
                                echo "<td>".$row['quantity']."</td>"; 
                                echo "</tr>";
                            }  
                        ?>    
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="popaddproduct">
                    <form action="addproducts.php" method="post">
                        <label for="cat">Product Category</label>
                    </form>
                </div>
             

                <div id="popup1" class="overlay">
                    <div class="popup">
                      
                        <a class="close" href="#">&times;</a>
                        <h1>Add Products</h1>
                        <form action="addproducts.php"  method="post">
                            <label for="cat">Product Category</label></br>
                            <select name="category" id="category">
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