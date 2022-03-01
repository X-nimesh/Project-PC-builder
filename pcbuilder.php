<?php
    session_start();

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
                            <li class="nav-link"><a href="shop.php">Shop</a></li>
                            <li class="nav-link"><a href="contact.php">Contact</a></li>
                        </div>
                        <li><div id="btn-main" class="loginB"><a href="LoginPage.php" id="btntxt">Login</a></div></li>
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
                                <select name="company" id="company" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <option value="Intel">Intel</option>
                                    <option value="AMD">AMD</option>
                                </select>

                                
                                <select name="model" id="model">
                                    <option value="" selected disabled hidden>Model</option>
                                    <option value="i9900k">Intel i9-9900k</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="compo">
                            <p>Ram</p>
                            <div class="option">
                                <select name="company" id="company" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <option value="Intel">Intel</option>
                                </select>
                                
                                <select name="model" id="model">
                                    <option value="" selected disabled hidden>Model</option>
                                    <option value="i9900k">Intel i9-9900k</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="inside">
                        <div class="compo">
                            <p>Ram</p>
                            <div class="option">
                                <select name="company" id="company" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <option value="Intel">Intel</option>
                                </select>
                                
                                <select name="model" id="model">
                                    <option value="" selected disabled hidden>Model</option>
                                    <option value="i9900k">Intel i9-9900k</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="compo">
                            <p>Ram</p>
                            <div class="option">
                                <select name="company" id="company" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <option value="Intel">Intel</option>
                                </select>
                                
                                <select name="model" id="model">
                                    <option value="" selected disabled hidden>Model</option>
                                    <option value="i9900k">Intel i9-9900k</option>
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="inside">
                        <div class="compo">
                            <p>Ram</p>
                            <div class="option">
                                <select name="company" id="company" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <option value="Intel">Intel</option>
                                </select>
                                
                                <select name="model" id="model">
                                    <option value="" selected disabled hidden>Model</option>
                                    <option value="i9900k">Intel i9-9900k</option>
                                </select>
                            </div>
                        </div>

                        <div class="compo">
                            <p>Ram</p>
                            <div class="option">
                                <select name="company" id="company" >
                                    <option value="" selected disabled hidden>Company</option>
                                    <option value="Intel">Intel</option>
                                </select>
                                
                                <select name="model" id="model">
                                    <option value="" selected disabled hidden>Model</option>
                                    <option value="i9900k">Intel i9-9900k</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pc">
                <img src="img/PC.png" alt="">
            </div>
        </form>
       

    </div>

    </div>


    <script src="script.js"></script>
    <script >
        // let logged_in='<?php echo $_SESSION['uname']; ?>';
        // console.log(logged_in);
        let profile=document.getElementById('nav');
        console.log(<?php echo isset($_SESSION['uname'])?>);
        if(<?php echo isset($_SESSION['uname']);?>){
                document.getElementById('btntxt').innerText = "Log Out";
                document.getElementById('btntxt').href="server/logOut.php";
                // document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='/profile.php'>Profile</a></li>";
                document.getElementById('nav').innerHTML += " <li class='nav-link'><a href='profile.php'><img src='img/account.png' class='profileicon' width=35px alt='acc'></a></li>";
            

               document.getElementById('btn-main').style.backgroundColor = "red";
        }
    </script>
</body>
</html>