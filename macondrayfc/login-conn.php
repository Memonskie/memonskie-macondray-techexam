<?php 
include("dbconfig.php");

if(isset($_POST['sub']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"select* from users where email='$email'and password='$password'");
$numRows = mysqli_num_rows($sql);
if($numRows  == 1){
echo "You are login Successfully ";
header("location: menu.php");   
}
else
{
	//
	header("location: login2.0.php");

	//
}
}
?>
