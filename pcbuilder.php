<?php
    session_start();
    include "conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="img/edge tech.png" type="image/png">
    <link rel="stylesheet" href="style/style1.css">
</head>
<body>
    <div class="bg1">
       <?php
        include "menu.php";
        ?>

    <div class="body">
        <form action="server/order.php" method="post">
            <div class="PcContainer">  
                <div class="core">
                    <div class="heading"><p> Core Component</p></div>
                    <div class="inside">

                        <div class="compo">
                            <p>Processor</p>
                            <div class="option">
                                <select name="CPUcompany" id="CPUcompany" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <?php

                                        $sql="SELECT  DISTINCT company FROM cpu;";
                                        $res= mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                       
                                             $com=$row['company'];
                                            echo "<option value=$com>$com</option>"; 
                                    }  
                                    ?>
                                    <!-- <option value="Intel">Intel</option>
                                    <option value="AMD">AMD</option> -->
                                </select>

                                
                                <select name="CPUmodel" id="CPUmodel">
                                    <option id="cpumodelselect" value="" selected disabled hidden>Model</option>
                                    <!-- <option value="" class="cpuO"></option> -->
                                   
                                    <!-- <option value="i9900k">Intel i9-9900k</option> -->
                                </select>
                            </div>
                        </div>
                    
                        <div class="compo">
                            <p>RAM</p>
                            <div class="option">
                                <select name="RAMsiz" id="RAMsiz" >
                                    <option value="" selected disabled hidden>Size</option>
                                    <?php

                                        $sql="SELECT  DISTINCT memSize FROM ram;";
                                        $res= mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                       
                                             $mem=$row['memSize'];
                                            echo "<option value=$mem>$mem</option>"; 
                                    }  
                                    ?>
                                    <!-- <option value="Intel">Intel</option> -->
                                </select>
                                
                                <select name="RAMmodel" id="RAMmodel">
                                    <option id="ramModel" value="" selected disabled hidden>Model</option>
                                   
                                    
                                    <!-- <option value="i9900k">Intel i9-9900k</option> -->
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="inside">
                        <div class="compo">
                            <p>Graphics</p>
                            <div class="option">
                                <select name="GPUcompany" id="GPUcompany" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <?php

                                        $sql="SELECT  DISTINCT company FROM gpu;";
                                        $res= mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                       
                                             $com=$row['company'];
                                            echo "<option value=$com>$com</option>"; 
                                    }  
                                    ?>
                                </select>
                                
                                <select name="GPUmodel" id="GPUmodel">
                                    <option id="gpumodelselect" value="" selected disabled hidden>Model</option>
                                   
                                </select>
                            </div>
                        </div>
                        
                        <div class="compo">
                            <p>Power Supply</p>
                            <div class="option">
                                <select name="PSUpower" id="PSUpower" >
                                    <option value="" selected disabled hidden>Output</option>
                                    <?php

                                        $sql="SELECT  DISTINCT output  FROM psu;";
                                        $res= mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){

                                            $out=$row['output'];
                                            echo "<option value=$out>$out</option>"; 
                                        }  
                                    ?>
                                </select>
                                
                                <select name="PSUmodel" id="PSUmodel">
                                    <option id="psumodelselect" value="" selected disabled hidden>Model</option>                                   
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="inside">
                        <div class="compo">
                            <p>Motherboard</p>
                            <div class="option">
                                <select name="Mcompany" id="Mcompany" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <?php

                                        $sql="SELECT  DISTINCT company  FROM motherboard;";
                                        $res= mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                            $out=$row['company'];
                                            echo "<option value=$out>$out</option>"; 
                                        }  
                                    ?>
                                   
                                </select>
                                
                                <select name="Mmodel" id="Mmodel">
                                    <option id="motmodelselect" value="" selected disabled hidden>Model</option>
                                    
                                </select>
                            </div> 
                        </div>

                        <div class="compo">
                            <p>Storage</p>
                            <div class="option">
                                <select name="StType" id="StType" >
                                    <option value="" selected disabled hidden>Storage Type</option>
                                    <?php
                                       
                                        $sql="SELECT  DISTINCT driveType FROM storage;";
                                        $res= mysqli_query($conn,$sql);
                                        // echo "try";
                                        while($row=mysqli_fetch_assoc($res)){
                                            $out=$row['driveType'];
                                            echo "<option value=$out>$out</option>"; 
                                        }  
                                    ?>
                                    
                                </select>
                                
                                <select name="Stmodel" id="Stmodel">
                                    <option id="stomodelselect" value="" selected disabled hidden>Model</option>
                                    
                                    
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pc">
                <img src="img/PC.png" alt=""><br>
                <!-- <p>Price:</p>
                <p>Power Comsumption:</p>
                <p>Power Supply: </p> -->
               <div class="detail"> 
                       <div class="price">Price: <div name="price" id="Tprice">0</div></div>
                       <div>Power Consumption: <div class="power powerC">0</div></div>
                      <div>Power Supply:<div class="power powerS">0</div></div>
                      <div>Power Difference:<div class="power powerDif">0</div></div>
                       <div>CPU Compatibility:<div class="comp"> UnCompatible</div></div>
                 
                </div>
                <input type="submit" id="submit" value="Order">
            </div>
        </form>
       

    </div>

    </div>

    <script>
         $('#submit').change(function(){
            <?php ?>
        });
    </script>
    <script src="script.js"></script>
    <script src="jquery.js" type='text/javascript'></script>
    <!-- menu login -->
    <script >
    
        let profile=document.getElementById('nav');

        let signup = document.getElementById("signupB");
       
        // document.getElementById('signupB').style.display = "none";
        if(<?php echo isset($_SESSION['uname']);?>){
                document.getElementById('btntxt').innerText = "Log Out";
                document.getElementById('btntxt').href="server/logOut.php";
                // document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='/profile.php'>Profile</a></li>";
                document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='profile.php'><img src='img/account.png'  width=35px alt='acc'></a></li>";
                signup.style.display="none";

               document.getElementById('btn-main').style.backgroundColor = "red";
        }
        
    </script>
    <!-- ajax option model -->
    <script>
      
        //for CPU
        $('#CPUcompany').change(function(){
            let company=$('#CPUcompany').val();
            // let model=document.getElementById('CPUmodel');
            // model.innerHTML="hey"
            var select='';
            $.ajax({
                type:'POST',
                url: "server/pcbuilder/getCPU.php",
                dataType:'json',
                data:{'comp':company},
                                 
                success: function(data){
                    select=`<option value="" selected disabled hidden>Model</option>`;
                    console.log(data);
                   $.each(data,function(index,value){
                     select+=`<option class="cpuO" value="${value.cpuId}">${value.model}</option>`;
                       
                    //    $("#CPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                   });
                //    $(select).insertAfter("#cpumodelselect");
                 $("#CPUmodel").html(select);
                    
                }
            });

        });
       
        //for ram
        $('#RAMsiz').change(function(){
           let siz=$('#RAMsiz').val();
           var select='';
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getRam.php",
               dataType:'json',
               data:{'siz':siz},
               success: function(data){
                select=`<option value="" selected disabled hidden>Model</option>`;
                   console.log(data);
                  $.each(data,function(index,value){
                    select+=`<option value="${value.ramid}">${value.model}</option>`;
                    
                    // $("#RAMmodel").html(`<option value="${value.model}">${value.model}</option>`);
                });
                $("#RAMmodel").html(select);
                // $(select).insertAfter("#ramumodelselect");

               }
           });

        });
        // for GPU

        $('#GPUcompany').change(function(){
           let comp=$('#GPUcompany').val();
           var select='';
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getGPU.php",
               dataType:'json',
               data:{'comp':comp},

               success: function(data){
                select=`<option value="" selected disabled hidden>Model</option>`;
                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      select+=`<option value="${value.gpuId}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#GPUmodel").html(select);
                //    $(select).insertAfter("#gpumodelselect");

               }
           });
        });
        // for PSU
        $('#PSUpower').change(function(){
           let pow=$('#PSUpower').val();
           var select='';
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPSU.php",
               dataType:'json',
               data:{'pow':pow},

               success: function(data){
                select=`<option value="" selected disabled hidden>Model</option>`;

                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      select+=`<option value="${value.psuId}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#PSUmodel").html(select);
                //    $(select).insertAfter("#psumodelselect");

               }
           });
        });

        // for Mboard
        $('#Mcompany').change(function(){
           let comp=$('#Mcompany').val();
           var select='';
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getMother.php",
               dataType:'json',
               data:{'comp':comp},

               success: function(data){
                select=`<option value="" selected disabled hidden>Model</option>`;

                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      select+=`<option value="${value.motId}">${value.model}</option>`;
                      console.log(select);
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#Mmodel").html(select);
                //    $(select).insertAfter("#motmodelselect");

               }
           });
        });
        // for Storage
        $('#StType').change(function(){
           let typ=$('#StType').val();
           var select='';
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getSto.php",
               dataType:'json',
               data:{'typ':typ},

               success: function(data){
                select=`<option value="" selected disabled hidden>Model</option>`;
                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      console.log(value.price);
                      select+=`<option value="${value.stoid}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                });
                console.log(select);
                $("#Stmodel").html(select);
                //    $(select).insertAfter("#stomodelselect");

               }
           });
        });
      


    </script>
    <!-- ajax price -->
   <script>
       // let totalPrice,cpuPrice,gpuPrice;
        let PowSupply=0;
        let cpucompany,ramType,ramSupport,cpuSupport='';
       let powerC=[];
        let price=[];
        let Tprice=0;
        let sum=0;
        let TpowerC=0;

       $('#CPUmodel').change(function(){
           let id=$('#CPUmodel').val();
            //    var select='';
           
            console.log("cpu model changed");
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPrice.php",
               dataType:'json',
               data:{'comp':'cpu',
            'id':id,
            'colN':'cpuId',},

               success: function(data){
                   console.log(data);
                  $.each(data,function(index,value){
                     
                      convPrice=value.price.replace('$', '');
                      power=value.powUsage.replace('W', '');
                        //  cpu=parseInt(convPrice);
                        //  try
                        //  price[1]=45;
                        TpowerC=0;
                        powerC[0]=parseInt(power);
                        powerC.map(x=>TpowerC+=x);
                        console.log(power);
                        console.log('total Power='+TpowerC);

                        sum=0;
                         price[0]=parseInt(convPrice);
                         price.map(x=>sum+=x);
                        console.log(sum);
                        // Tprice=cpu+ram+gpu+psu+mot+sto;
                    //   price+=parseInt(convPrice);
                    //   powerConsump+=parseInt(power);
                    //   console.log(power);
                      cpucompany=value.company;
                  
                    console.log('sum='+sum);
                    
                    if(cpuSupport==cpucompany){
                         $(".comp").text("Compatible");
                         
                        }
                        else{
                         $(".comp").text("UnCompatible");

                     }
                  });
                    $("#Tprice").html(sum);
                    $(".powerC").html(TpowerC);
               }
           });
        });
        // ram
       $('#RAMmodel').change(function(){
           let id=$('#RAMmodel').val();
        //    var select='';
        console.log("ram model changed");
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPrice.php",
               dataType:'json',
               data:{'comp':'ram',
                    'id':id,
                    'colN':'ramId',},
               success: function(data){
                   console.log(data);
                  $.each(data,function(index,value){
                      convPrice=value.price.replace('$', '');
                    //   price+=parseInt(convPrice);
                    //   ram=parseInt(convPrice);
                    //   Tprice=cpu+ram+gpu+psu+mot+sto;
                        sum=0;
                         price[1]=parseInt(convPrice);
                         price.map(x=>sum+=x);

                      ramType=value.company;
                      console.log(ramType);
                    // console.log(value.price);
                    console.log(convPrice);
                    console.log('sum='+sum);

                    //   console.log(value.model);
                    //   console.log(value.price);
                      
                    // console.log("totalPrice"+price);
                });
                // $("#Stmodel").html(select);
                $("#Tprice").html(sum);

            }
        });
       });
    //    GPU price and pow
       $('#GPUmodel').change(function(){
           let id=$('#GPUmodel').val();
        //    var select='';
        console.log("gpu model changed");
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPrice.php",
               dataType:'json',
               data:{'comp':'gpu',
                    'id':id,
                    'colN':'gpuId',},
               success: function(data){
                   console.log(data);
                  $.each(data,function(index,value){
                      convPrice=value.price.replace('$', '');
                    //   gpu=parseInt(convPrice);
                    //   Tprice=cpu+ram+gpu+psu+mot+sto;
                        sum=0;
                         price[2]=parseInt(convPrice);
                         price.map(x=>sum+=x);

                      power=value.powUsage.replace('W', '');

                        TpowerC=0;
                        powerC[1]=parseInt(power);
                        powerC.map(x=>TpowerC+=x);
                        console.log(power);
                        console.log('total Power='+TpowerC);
                     
                    //   powerConsump+=parseInt(power);

                    //   console.log(powerConsump);
                    //   PowSupply=value.output;
                    //   console.log(PowSupply);
                    // console.log(value.price);
                    console.log(convPrice);
                    console.log('sum='+sum);
                    //   console.log(value.model);
                    //   console.log(value.price);
                      
                    // console.log("totalPrice"+price);
                });
                // $("#Stmodel").html(select);
                $("#Tprice").html(sum);
                $(".powerC").html(TpowerC);

            }
        });
       });
    //    PSU
       $('#PSUmodel').change(function(){
           let id=$('#PSUmodel').val();
        //    var select='';
        console.log("psu model changed");
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPrice.php",
               dataType:'json',
               data:{'comp':'psu',
                    'id':id,
                    'colN':'psuId',},
               success: function(data){
                   console.log(data);
                  $.each(data,function(index,value){
                      convPrice=value.price.replace('$', '');
                    //   price+=parseInt(convPrice);
                         sum=0;
                         price[3]=parseInt(convPrice);
                         price.map(x=>sum+=x);

                      power=value.output.replace('W', '');
                     
                      PowSupply=parseInt(power);

                      console.log(PowSupply);
                        //   PowSupply=value.output;
                        //   console.log(PowSupply);
                        // console.log(value.price);
                        console.log(convPrice);
                    console.log('sum='+sum);

                        //   console.log(value.model);
                        //   console.log(value.price);
                        
                        // console.log("totalPrice"+price);
                });
                // $("#Stmodel").html(select);
                $("#Tprice").html(sum);
                $(".powerS").html(PowSupply);
                powerD();
            }
        });
       });
    //    MOther board
       $('#Mmodel').change(function(){
           let id=$('#Mmodel').val();
        //    var select='';
        console.log("MOtherBoard model changed");
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPrice.php",
               dataType:'json',
               data:{'comp':'motherboard',
                    'id':id,
                    'colN':'motId',},
               success: function(data){
                   console.log(data);
                  $.each(data,function(index,value){

                      convPrice=value.price.replace('$', '');
                    //   price+=parseInt(convPrice);
                            sum=0;
                         price[4]=parseInt(convPrice);
                         price.map(x=>sum+=x);
                      
                      cpuSupport=value.support;
                     ramSupport=value.memType;
                     if(cpuSupport==cpucompany){
                         $(".comp").text("Compatible");
                         
                        }
                        else{
                         $(".comp").text("UnCompatible");

                     }
                       console.log(cpuSupport);
                       console.log(ramSupport);
                        //   PowSupply=value.output;
                        //   console.log(PowSupply);
                        // console.log(value.price);
                        console.log(convPrice);
                    console.log('sum='+sum);

                        //   console.log(value.model);
                        //   console.log(value.price);
                        
                        // console.log("totalPrice"+price);
                });
                // $("#Stmodel").html(select);
                $("#Tprice").html(sum);

            }
        });
       });
    //    Storage 
       $('#Stmodel').change(function(){
           let id=$('#Stmodel').val();
        //    var select='';
        console.log("MOtherBoard model changed");
           $.ajax({
               type:'POST',
               url: "server/pcbuilder/getPrice.php",
               dataType:'json',
               data:{'comp':'storage',
                    'id':id,
                    'colN':'stoId',},
               success: function(data){
                   console.log(data);
                  $.each(data,function(index,value){

                      convPrice=value.price.replace('$', '');
                    //   price+=parseInt(convPrice);
                         sum=0;
                         price[5]=parseInt(convPrice);
                         price.map(x=>sum+=x);

                         console.log(convPrice);
                         console.log('sum='+sum);
                    
                  
                        // console.log(price);
                        //   console.log(value.model);
                        //   console.log(value.price);
                        
                        // console.log("totalPrice"+price);
                });
                // $("#Stmodel").html(select);
                $("#Tprice").html(sum);

            }
        });
       });
      function powerD(){
           console.log("powerC,sda");
           let powerC=$('.powerC').text();
           let powerS=$('.powerS').text();
           let powerDiff=parseInt(powerS)-parseInt(powerC);
        //    console.log(" power"+powerC+" S "+powerS+" D "+powerDiff);
            $(".powerDif").html(powerDiff);
            if(powerDiff>0){
                $(".powerDif").css('color','lime');
            }else{
                $(".powerDif").css('color','red');
            }
       };
   </script>
</body>
</html>