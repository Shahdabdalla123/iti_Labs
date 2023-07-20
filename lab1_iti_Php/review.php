<?php 

$gender="Male";
$firstName=$_REQUEST["firstName"];
$lastName=$_REQUEST["Lastname"];
$address=$_REQUEST["address"];
$lang="No Skills";
$Dept=$_REQUEST["Dept"];
$code=$_REQUEST["code"];
if(isset($_REQUEST["lang"]))
{
    $lang=$_REQUEST["lang"];
}
if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
}

if($gender=="female")
{
    echo "Hello Mrs: $firstName  $lastName <br><br>";
}
else
{
    echo "Hello Mr: $firstName  $lastName <br><br><br>";
}
echo "<------please Review your information-------> <br><br>";
echo "Name: $firstName <br><br>"; 
echo "address: $address <br><br>"; 
echo "Department: $Dept <br><br>"; 

echo "Your Skills is: <br><br>"; 
foreach($lang as $key => $value)
{
    echo "$value <br>";
} 
 
if ($code != "wec3d") {
   header("Location: index.php");
   exit();  
}
 


?>

