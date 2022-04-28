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
    <link rel="stylesheet" href="style/style1.css">
    <link rel="icon" href="img/edge tech.png" type="image/png">
</head>
<body>


<div class="bg1">

    <?php
        if(!empty($_GET)){
            echo "<div id='top-msg'  class='top-msg'>";
            if(!empty($_GET['success'])){
                ?>
                <div class="successh" role="alert">
                Logged in Successfully
                </div>
            <?php
            }
            if(!empty($_GET['error'])){
                ?>
                <div class="errorh" role="alert">
                Login credential is wrong
                </div>
            <?php
            }
            if(!empty($_GET['failed'])){
                ?>
                <div class="failh" role="alert">
                Please login in
                </div>
            <?php
            }
            if(!empty($_GET['fail'])){
                ?>
                <div class="failh" role="alert">
                 Please login in
                </div>
            <?php
            }
            echo "</div>";
        }
    ?>

        <?php
            include "menu.php";
        ?>
        <div class="mainH">

            <div class="slideshow-container">

                <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="img/pc_img/carossel/1.jpg" style="width:100%">
                <!-- <div class="text">Best Pc</div> -->
                </div>

                <div class="mySlides fade">
                <!-- <div class="numbertext">2 / 3</div> -->
                <img src="img/pc_img/carossel/2.jpg" style="width:100%">
                <!-- <div class="text">Caption Two</div> -->
                </div>

                <div class="mySlides fade">
                <!-- <div class="numbertext">3 / 3</div> -->
                <img src="img/pc_img/3.jpg" style="width:100%">
                <!-- <div class="text">Caption Three</div> -->
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>


                <!-- <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div> -->
            </div>
            <div class="homeconatinerPc">
                <div class="img">
                    <img src="img/pc_img/pc.jpg" alt="">
                </div>

                <div class="contentOP">
                    <h1>Pc Builder</h1>
                    <p> Build Your Own PC</p>
                    <p>Build what you need</p>
                    <a class="btn_builder" href="pcbuilder.php">
                        <button>Build Now</button>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="column"> 
                    <img src="img/pc_img/1.jpg" alt="" style="width:100%">
                    <img src="img/pc_img/4.jpg" alt="" style="width:100%">
                    <img src="img/pc_img/6.jpg" alt="" style="width:100%">
                </div>
                <div class="columnR">
                    <img src="img/pc_img/3.jpg" alt="" style="width:100%">
                    <img src="img/pc_img/2.jpg" alt="" style="width:100%">
                    <img src="img/pc_img/5.jpg" alt="" style="width:100%">
                </div>
            </div>
                            
          
        </div>
</div>
    <script src="script.js"></script>
     <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }


        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>
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

</body>
</html>