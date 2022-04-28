<?php
    include "conn.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$id'";
    $result=mysqli_query($conn,$sql);    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
          
      
    ?>
        <form style="width: 40vw; text-align:center; margin: 0 auto;" action="updateUser.php?id=<?php echo $id?>" method="post" >
            <fieldset  >
                <legend style="color:#00008B" >
                    <h1>User</h1>
                </legend>
                
        <label for="age"style="color: #00008B" ><b>Username:</b></label>
        <input type="text" id="agel" name="uname"  tabindex="5" value="<?php echo $row['uname']?>"><br> 
        <br>
        <label for="name" style="color:#00008B" ><b>Name:</b></label>
        <input type="text" id="name" name="name" tabindex="1" value="<?php echo $row['Name']?>" ><br>
        <br>

        <label for="age"style="color: #00008B" ><b>Address:</b></label>
        <input type="text" id="agel" name="address"  tabindex="2" value="<?php echo $row['address']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Contact:</b></label>
        <input type="text" id="agel" name="contact"  tabindex="3" value="<?php echo $row['contact']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>E-Mail</b></label>
        <input type="text" id="agel" name="email"  tabindex="3" value="<?php echo $row['email']?>"><br>
        <br>
    
        <label for="age"style="color: #00008B" ><b>Password:</b></label>
        <input type="text" id="agel" name="password"  tabindex="4" value="<?php echo $row['password']?>"><br>
        <br>
    
       
    
        <input type="submit"  value="update">
        <input type="reset">
        <br>

        </fieldset>
        </form> 
        <?php


    }
    else{
        echo "No user found";
    }
?>