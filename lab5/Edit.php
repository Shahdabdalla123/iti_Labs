<?php
include "connect.php";
$n=$_GET['name'];
$dp=new DB();
$return=$dp->connectt("localhost", "root", "10122002", "first");
$result =$dp->select2("new_data",$n);
   echo "<body style='background-color: antiquewhite'><form action='' method='post'enctype='multipart/form-data'>";
   echo "<h1 style='text-align: center ;color:brown'>
            Update Data
         </h1>";
  if ($result->num_rows > 0)
     {

       while ($row = $result->fetch_assoc()) 
       {
          $name=$row['name'];
          $Email=$row['Email'];
          $Password=$row['Password'];
          $confirm_Password=$row['confirm_Password'];
          $RoomNum=$row['RoomNum'];
          $Ext=$row['Ext'];
          $imgNewName =$row['image'];
           
           echo "Name: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp<input type='text' name='name' value='$name'><br><br><br>";

           echo "Email: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <input type='text' name='Email' value='$Email'><br><br><br>";
           echo "Password &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp <input type='password' name='Password' value='$Password'><br><br><br>";
           echo "Confirm Password  <input type='password' name='confirm_Password' value='$confirm_Password'><br><br><br>";
           echo "Room Num &nbsp &nbsp &nbsp &nbsp  &nbsp <input type='text' name='RoomNum' value='$RoomNum'><br><br><br>";
           echo "EXt &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <input type='text' name='Ext' value='$Ext'><br><br><br>";
           echo "Image   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  <input type='file' name='image'value='$imgNewName'><br><br><br>";
           echo "<button type='submit' name='b' style='background-color:brown; height: 30px; '><a style='text-decoration:none; color:black; margin:20px'>Submit</a></button>";
         
       }
        echo "</form>";
        echo "</body>";
     } 
  


     if (isset($_POST['b'])) {
        $name = $_POST['name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $confirm_Password = $_POST['confirm_Password'];
        $RoomNum = $_POST['RoomNum'];
        $Ext = $_POST['Ext'];
        $image = $_POST['image'];
    
        $columns = array("name", "Email", "Password", "confirm_Password", "RoomNum", "Ext", "image");
        $values = array($name, $Email, $Password, $confirm_Password, $RoomNum, $Ext, $image);
    
        if ($dp->update("new_data", $name, $columns, $values)) {
            echo "Record updated successfully";
            header('location:Table.php');
        } else {
            echo "Error updating record";
        }
    }
 

?>