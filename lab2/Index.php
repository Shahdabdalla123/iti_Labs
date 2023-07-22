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
   <link rel="stylesheet" href="index.css">
</head>
<body>
 <h2>Registration Form</h2>
 <form action="valid.php" method="POST">

    <label for="first-name" >First name</label>
    <input type="text" id="first-name" name="first-name" value="<?php  if(isset($_POST['first-name'])) echo $_POST['first-name'];?>">
    <div class="red">
    <?php
     if(isset($errors['first-name']))
     {
        echo $errors['first-name'];
     }
    ?>
    </div>
    <br><br>
    <label for="last-name">Last name:</label>
    <input type="text" id="last-name" name="last-name">
    <div class="red">
    <?php
     if(isset($errors['last-name']))
     {
        echo $errors['last-name'];
     }
    ?>
    </div>
    <br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" class="address-field"></textarea><br><br>

    <label for="country">Country:</label>
    <select id="country" name="country">
      <option value="">Select Country</option>
      <option value="Egypt">Egypt</option>
      <option value="Rusia">Rusia</option>
      <option value="German">German</option>
    </select><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <div class="red">
    <?php
     if(isset($errors['gender']))
     {
      
        echo $errors['gender'];
     }
    ?>
    </div>
    <br><br>

    <label for="skills">Skills:</label><br>
    <input type="checkbox" id="php" name="skills[]" value="PHP">
    <label forphp>PHP</label><br>
    <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
    <label for="mysql">C#</label><br>
    <input type="checkbox" id="java" name="skills[]" value="Java">
    <label for="java">Java</label><br>
    <input type="checkbox" id="javaScript" name="skills[]" value="javaScript">
    <label for="javaScript">javaScript</label><br>
    <input type="checkbox" id="Python" name="skills[]" value="Python">
    <label for="Python">Python</label><br>
    <input type="checkbox" id="c++" name="skills[]" value="C++">
    <label forcpp>C++</label><br><br>

    <label for="username">Username</label>
    &nbsp; &nbsp;
    <input type="text" id="username" name="username">    
    <div class="red">
    <?php
     if(isset($errors['username']))
     {
        echo $errors['username'];
     }
    ?>
    </div>
    <br> 

    <label for="password">Password:</label>
    &nbsp; &nbsp;
    <input type="password" id="password" name="password"><br><br>

    <label for="department">Department:</label>
    <input type="text" id="department" name="department"><br><br>

    <label for="code"><h3>Code wec3d</h3></label>
    
    <input type="text" id="code" name="code">
    <div class="red">
   
    <br><br>
    <input class="btn" type="reset" value="Restart">
    <input class="btn"type="submit" value="Submit">
   
  </form>
  <button class="btn"><a href="Table.php" style="text-decoration: none; color:black">View Student</a></button>
  
</body>
</html>
