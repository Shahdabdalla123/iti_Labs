<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 
    <form id ="form"action="review.php" method="post">

     <label for="f">First Name</label>
     &nbsp;   
     <input id="f" placeholder="Enter First Name" name="firstName"required>
     <br>  <br>  
     <label for="l">last Name</label>
     &nbsp;    
     <input id="l" placeholder="Enter Last Name" name="Lastname" required>
     <br><br>
     <label for="t">address</label>
      &nbsp;&nbsp;&nbsp;     
     <textarea id="t" name="address" cols="20" rows="4"></textarea>
     <br><br>
     <label for="c">Country</label>
     <select id="c" name="country">
      <option>Egypt</option>
      <option>Amircan</option> 
      <option>japan</option> 
      <option>surya</option>

     </select>
     
     <br><br>
     <label for="g">Gender</label>
     <input type="radio" id="g" name="gender" value="male"> Male
     <input type="radio" id="g" name="gender" value="female">Female
  
     <br><br>
     <label for="lang">Skills:</label>
     <br><br>
     <input type="checkbox" id="lang" name="lang[]" value="C++"> C++
     <input type="checkbox" id="lang"name="lang[]"value="C#">C#
     <br>
     <input type="checkbox" id="lang" name="lang[]"value="Php"> Php
     <input type="checkbox" id="lang"name="lang[]"value="Java">Java
     <br>
     <input type="checkbox" id="lang" name="lang[]"value="Javascript"> Javascript
     <input type="checkbox" id="lang"name="lang[]"value="python">Python
     <br>  <br> 
     <label for="u">User Name</label>
     &nbsp; 
     <input id="u" placeholder="Enter User Name" name="UserName"required>
     <br>  <br> 
     <label for="p">Password</label>
     &nbsp;   &nbsp;  &nbsp;  
     <input type="password" id="p" placeholder="Enter Password" name="password"required>
     <br>  <br> 
     <label for="d">Department</label>
     &nbsp;   
     <input type="text" id="d" placeholder="Enter Department" name="Dept"required> 
     <h2>wec3d</h2>
     <input type="text" name="code"required> 
     <br>  <br> 
     <?php
      
     ?>
     <button type="submit"  name="submit">Submit</button>
     <button type="reset">Reset</button>
    </form>
    <script src="index.js"></script>
</body>
</html>