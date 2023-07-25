<?php

include "connect.php";
$email="";
$errors = array();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{


    if(isset($_FILES['image']) and !empty($_FILES['image']['name']))
   {

    $imgName =$_FILES['image']['name'];
    $imgTmpName =$_FILES['image']['tmp_name'];

    $ext = pathinfo($imgName)['extension'];

    $imgNewName = "images/".time().".".$ext;

    if(in_array($ext, array('png', 'jpg','jpeg'))){
        
        move_uploaded_file($imgTmpName, $imgNewName);

    }
    else
    {

        $errors['image'] = 'Invalid format';
        
    }

    
    }
    else
    {
    
    $errors['image'] = 'Image is required ';
    
    }
    if (empty($_POST["name"]))
    {
        $errors["name"] = "Name is required";
    }
    else
    {
        $firstName = $_POST["name"];
    }
    
    function valid_email($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    if(!valid_email($_POST["Email"]))
    {
        $errors["Email"]= "Invalid Email address.";
    }
    if (empty($_POST["Email"])) 
    {
        $errors["Email"]= "Email is required";
    } 
    else
    {
       
        $email =$_POST["Email"];
       
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
        {
            $errors["Email"]="Invalid Email format";
        }
    }
 
    if (empty($_POST['password']))
    {
        $errors['password'] = 'Password is required';
    } 
    elseif (strlen($_POST['password']) !== 8)
    {
        $errors['password'] = 'Password must be exactly 8 characters';
    } 
    elseif (!preg_match('/^[a-z0-9_]*$/', $_POST['password'])) 
    {
        $errors['password'] = 'Password can only contain lowercase letters, digits, and underscores';
    } 
    else 
    {
        $password = $_POST['password'];
    }

    if (!empty($errors))
    {
        $err=json_encode($errors);
        header("Location:form.php?errors=$err");
        exit();
    }
    else
    {
        
         $Name=$_POST['name'];
         $Email=$_POST['Email'];
         $password=$_POST['password'];
         $cpassword=$_POST['cpassword'];
         $Text=$_POST['Text'];
         $Rm=$_POST['Rm'];

        
        $db = new DB();
        if($db->connectt("localhost", "root", "10122002", "first"))
        {
            echo"<h1 style='text-align: center; color:Green; margin-top:300px'>Connected Sucsessfully</h1>";
        }
        $columns = "name, Email,Password,confirm_Password, RoomNum, EXt,image";
        $values = "'$Name', '$Email', '$password', '$cpassword', '$Rm','$Text', '$imgNewName'";
        if ($db->insert("new_data", $columns, $values)) 
        {
            echo"<h1 style='text-align: center; color:Green;'>Record Registed Successfully</h1>";
        } 
    }

  
};

?>