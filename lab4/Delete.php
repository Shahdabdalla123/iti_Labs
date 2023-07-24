<?php

 

$mysqli=new mysqli();
$mysqli->connect('localhost','root','10122002','first');
$name=$_GET['name'];

if($mysqli->connect_error)
{
    die("connection Failed :" .$mysqli->connect_error);
}
else
{
    $stmt=$mysqli->prepare("DELETE FROM new_data WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    header('location:Table.php');
}
 
?>

 