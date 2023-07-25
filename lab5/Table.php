<?php
  
  include 'connect.php';
  $dp=new DB();
  $return=$dp->connectt("localhost", "root", "10122002", "first");
  $result =$dp->select("new_data");
  echo "<table border='3px solid black'>";
  echo "<tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm_Password</th>
            <th>Room_Number</th>
            <th>Ext</th>
            <th>Image</th>
            <th> Edit</th>
            <th> Delete</th>
         </tr>";
    if ($result->num_rows > 0)
     {
       while ($row = $result->fetch_assoc()) 
       {
           echo "<tr>";
           echo "<td>" . $row['name'] . "</td>";
           echo "<td>" . $row['Email'] . "</td>";
           echo "<td>" . $row['Password'] . "</td>";
           echo "<td>" . $row['confirm_Password'] . "</td>";
           echo "<td>" . $row['RoomNum'] . "</td>";
           echo "<td>" . $row['Ext'] . "</td>";
           echo "<td>" . $row['image'] . "</td>";
           $name=$row['name'] ;
           echo "<td> <button style='background-color: green;'><a href='Edit.php?name=$name'style='text-decoration:none; color:white'>Edit</a></button></td>";
           echo "<td> <button style='background-color: red;'><a href='Delete.php?name=$name'style='text-decoration:none; color:white'>Delete</a></button></td>";
           echo "</tr>";
       }
   
        echo "</table>";
   } 

 

?>