<?php

  include 'connect.php';
  $dp=new DB();
  $dp->connectt("localhost", "root", "10122002", "first");
  $name=$_GET['name'];
  $result=$dp->delete('new_data',$name);
  header('location:Table.php');
 
 
?>

 