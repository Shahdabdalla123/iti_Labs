<?php

    $errors = array();
    if(isset($_GET['errors']))
    {
        $errors = json_decode($_GET['errors'], true);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1>Login</h1> 
    <form action="loginvalid.php" method="POST" enctype="multipart/form-data">
    <label for="Email" >Email</label>
     &nbsp; &nbsp;  &nbsp; &nbsp;    
    <input type="text" id="Email" name="Email" >
    <div class="reed">
    <?php
     if(isset($errors['Email']))
     {
        echo $errors['Email'];
     }
    ?>
    </div>
     <br>

    <label for="password">Password:</label>
     &nbsp;  
    <input type="password" id="password" name="password"><br><br>
    <div class="reed"> 
      <?php 
       if(isset($errors['password']))
        {echo $errors['password']; }
      ?>
    </div>
    <input class="btn2"type="submit" value="Login">
    <br><br><br> 
    <a href="#">Forget password?</a>
    </form>
</body>
</html>