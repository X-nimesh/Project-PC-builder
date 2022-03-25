<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style1.css">
    <link rel="icon" href="img/edge tech.png" type="image/png">
    <title>SignUp Page</title>
</head>
<body>
    <div class="bg1">
        <header class="header">
            <div class="container">
                <div class="logom">
                    <a href="index.php"><img src="img/edge tech.png" alt="logo" class="logo"></a>
                </div>
                

                    <ul class="nav-bar">
                        <li class="nav-link"><a href="index.php">Home</a></li>
                        <li class="nav-link"><a href="pcbuilder.php">PC Builder</a></li>
                        <li class="nav-link"><a href="shop.php">Shop</a></li>
                        <li class="nav-link"><a href="signuppage.php">SignUp</a></li>
                        <li><div class="loginB"><a href="LoginPage.php">Login</a></div></li>
                    </ul>

                  
            </div>
        </header>
        <div class="login">
            <div class="containermain">
                <form class="signupF" action="server/signUpSave.php" method="post">
                  
                    <h1>Join us</h1>
                    <label for="fname">Full Name</label>
                    <input title="fname" type="text" name="fname">
                    <label for="uname">User Name</label>
                    <input title="uname" type="text" name="uname">
                    <label for="address">Address</label>
                    <input title="add" type="text" name="address">
                    <label for="contact">Contact No.</label>
                    <input title="contact" type="text" name="contact">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" title="email">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" title="pass"><br><br>
                    <input  class="btn-grad" type="submit" value="Sign-Up">
                    <p >Already a user <a href="LoginPage.php"> Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>