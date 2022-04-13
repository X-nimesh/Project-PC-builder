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
            <!-- <div class="Lphoto">
                <img src="../img/vendorSignup.png" alt="">
            </div> -->
            <div class="vendorLoginFM">
                <div class="signupT"><p>Already a Vendor ? </p> <a href="signupVendor.php"><button>Login </button></a></div>
                <div class="loginFvendor">
                  
                    <h1> Welcome to Pc Builder </h1>
                    <p>Please provide the valid data to register data.</p>
                        <form action="../server/signUpBVendor.php" method="post">
                            <label for="name">Name</label>
                            <input type="text" name="name" id=""><br>
                            <label for="address">Address</label>
                            <input type="text" name="add" id=""><br>
                            <label for="contact">Contact</label><br>
                            <input type="tel" name="number"><br>
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