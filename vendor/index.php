<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style1.css">
    <title>Vendor Portal Login</title>
</head>
<body>
    <div class="vendorLogbg">
        <div class="loginbox">
            <div class="Lphoto">
                <img src="../img/vendorSignup.png" alt="">
            </div>
            <div class="vendorLoginFM">
                <div class="signupT"><p>Don't a Vendor yet? </p> <a href="signupVendor.php"><button>Register</button></a></div>
                <div class="loginFvendor">
                    <h1>Hello! Welcome back</h1>
                    <p>Log in wìth your to that you entered
                        during Your registration</p>
                        <form action="../server/vendorLoginBack.php" method="post">
                            <label for="username">E-mail:</label> <br>
                            <input type="text" name="email" id="username"> <br>
                            <label for="password">Password : </label> <br>
                            <input type="password" name="pass" id="password"> <br>
                            <input type="submit" value="Login">
                        </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>