<?php
$errors=array();

if(isset($_GET['errors']))
{
    $errors=json_decode($_GET['errors'],true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
 <h2 > Registration Form</h2>
 <form action="valid.php" method="POST" enctype="multipart/form-data">

    <label for="name" >Name</label>
      &nbsp; &nbsp;  &nbsp;    &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  
    <input type="text" id="name" name="name" >
    <div class="red">
    <?php
     if(isset($errors['name']))
     {
        echo $errors['name'];
     }
    ?>
    </div>
    <br> 
    <label for="Email" >Email</label>
     &nbsp; &nbsp;  &nbsp;    &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  
    <input type="text" id="Email" name="Email" >
    <div class="red">
    <?php
     if(isset($errors['Email']))
     {
        echo $errors['Email'];
     }
    ?>
    </div>
   
    <br> 
    <label for="password">Password:</label>
     &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;     
  
    <input type="password" id="password" name="password">
    <div class="red">
    <?php
     if(isset($errors['password']))
     {
        echo $errors['password'];
     }
    ?>
    </div>
    <br>

    <label for="cpassword">Confirm Password:</label>
     &nbsp; &nbsp;
    <input type="password" id="cpassword" name="cpassword"><br><br>
    
    <label for="Text">EXT</label>
    &nbsp; &nbsp;  &nbsp;    &nbsp;    &nbsp;    &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;       
    <input type="Text" id="Text" name="Text"><br><br>

    
    <label for="Rm">Room Num:</label>
    &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;    
    <select id="Rm" name="Rm">
      <option value="R1">Room 1</option>
      <option value="R2">Room 2</option>
      <option value="R3">Room 3</option>
      <option value="R4">Room 4</option>
    </select><br><br>
 
    <label for="img">Image:</label>
    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;  
    <input type="file" id="img" class="img" name="image">
    <div class="red">
    <?php
     if(isset($errors['image']))
     {
        echo $errors['image'];
     }
    ?>
    </div>
    <br><br>
    
    <input class="btn"type="submit" value="Register">
    &nbsp; 
    <button class="btn"><a href="login.php" style=" text-decoration: none; color:black">Login</a></button> 
  </form>
   
  
</body>
</html>
