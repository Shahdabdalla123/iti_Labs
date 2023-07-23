<?php
    
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $errors = array();
    $data = file('Register.txt');
    
    foreach ($data as $value) 
    {
            
        $user = explode(':', $value);
        $loggedIn = false;
        foreach ($user as $key => $value) 
        {
            
            if($Email == $user[1] and $password == $user[2])
            {
                $loggedIn = true;
            }
            
        }
    
    
    
    }
    
    if($loggedIn)
    {
    
        session_start();
        $_SESSION['Email'] = $Email;
        $_SESSION['logged'] = true;
    
        header("location:welcome.php?Name=".$user[0]);
    
    }
    else
    {
    
        header('location:login.php?error=IncorrectCredentials');
    
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
        header("Location:login.php?errors=$err");
        exit();
    }
   
?> 