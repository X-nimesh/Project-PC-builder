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
        <header class="header">
            <div class="container">
                <div class="logom">
                    <a href="index.php"><img src="img/edge tech.png" alt="logo" class="logo"></a>
                </div>
                    <ul  class="nav-bar">
                        <div id='nav' class="nav-barIn">
                            <li class="nav-link"><a href="index.php">Home</a></li>
                            <li class="nav-link"><a href="pcbuilder.php">PC Builder</a></li>
                            <li class="nav-link"><a href="contact.php">Contact</a></li>
                        </div>
                        <li><div id="btn-main" class="loginB"><a href="LoginPage.php" id="btntxt">Login</a></div></li>
                        <li><div  class="signup" id="signupB"><a href="signuppage.php" >Sign Up</a></div></li>
                    </ul>
            </div>
        </header>

    <div class="body">
        <form action="pcbuilder.php" method="post">
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
                                    <option value="" selected disabled hidden>Model</option>
                                   
                                    <!-- <option value="i9900k">Intel i9-9900k</option> -->
                                </select>
                            </div>
                        </div>
                    
                        <div class="compo">
                            <p>Ram</p>
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
                                    <option value="" selected disabled hidden>Model</option>
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
                                    <option value="" selected disabled hidden>Model</option>
                                   
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
                                    <option value="" selected disabled hidden>Model</option>
                                   
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
                                            // echo "<option value=$out>$out</option>"; 
                                        }  
                                    ?>
                                   
                                </select>
                                
                                <select name="Mmodel" id="Mmodel">
                                    <option value="" selected disabled hidden>Model</option>
                                   
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
                                    <option value="" selected disabled hidden>Model</option>
                                    
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pc">
                <img src="img/PC.png" alt="">
                <p>Price:</p>
                <p>Power Comsumption:</p>
                <p>Power Supply: </p>
            </div>
        </form>
       

    </div>

    </div>

    
    <script src="script.js"></script>
    <script src="jquery.js" type='text/javascript'></script>
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
    <script>
        let PowSupply=0;
        let totalPrice,cpuPrice,gpuPrice;
        let price=[];
        let powerConsump=0;
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
                    console.log(data);
                   $.each(data,function(index,value){
                     select+=`<option value="${value.model}">${value.model}</option>`;
                       
                    //    $("#CPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                   });
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
                   console.log(data);
                  $.each(data,function(index,value){
                    select+=`<option value="${value.model}">${value.model}</option>`;
                    
                    // $("#RAMmodel").html(`<option value="${value.model}">${value.model}</option>`);
                });
                $("#RAMmodel").html(select);
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
                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      select+=`<option value="${value.model}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#GPUmodel").html(select);
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
                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      select+=`<option value="${value.model}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#PSUmodel").html(select);
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
                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      select+=`<option value="${value.model}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#Mmodel").html(select);
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
                   console.log(data);
                  $.each(data,function(index,value){
                      console.log(value.model);
                      console.log(value.price);
                      select+=`<option value="${value.model}">${value.model}</option>`;
                    //   $("#GPUmodel").html(`<option value="${value.model}">${value.model}</option>`);
                  });
                    $("#Stmodel").html(select);
               }
           });
        });
      


    </script>
   
</body>
</html>