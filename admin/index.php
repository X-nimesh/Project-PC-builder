<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style1.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="adminbg">
        <div class="adminMain">
            <img class="adminFLogo" src="../img/edge tech.png" alt="logo">
            <div class="adminInnerForm">
                <h1 class="adminLhead">Welcome</h1>
                <h2>Please Login to admin Dashboard</h2>
                <form action="../server/adminLBack.php" class="adminLogin" method="POST">
                    <div>
                        <img src="../img/user.png" alt="">
                        <input type="text" name="uname" id="uname"><br>
                    </div>
                    <div>
                        <img src="../img/lock.png" alt="">
                        <input type="password" name="pass" id="pass"><br>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div> 
    </div>
</body>
</html>