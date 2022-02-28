<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style1.css">
    <link rel="icon" href="img/edge tech.png" type="image/png">
    <title>Login Page</title>
</head>
<body>
    <div class="bg1">
        <header class="header">
            <div class="container">
                <div class="logom">
                    <a href="/index.html"><img src="img/edge tech.png" alt="logo" class="logo"></a>
                </div>
                

                    <ul class="nav-bar">
                        <li class="nav-link"><a href="index.php">Home</a></li>
                        <li class="nav-link"><a href="pcbuilder.php">PC Builder</a></li>
                        <li class="nav-link"><a href="shop.php">Shop</a></li>
                        <li class="nav-link"><a href="contact.php">Contact</a></li>
                        <li><div class="loginB"><a href="LoginPage.php">Login</a></div></li>
                    </ul>

                  
            </div>
        </header>


        <div class="login">
            <div class="containermain">
                <form class="loginF" action="server/loginBack.php" method="post">
                    <h1>Here you can login</h1>
                    <label for="email">E-mail</label><br>
                    <input type="text" name="email" title="email">
                    <br>
                    <label for="pass">Password</label><br>
                    <input type="password" name="pass" title="pass">
                    <br>
                    <br>
                    <input  class="btn-grad" type="submit" value="login">
                    <p>Not registered yet? <a href=signuppage.php>Create an Account</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>