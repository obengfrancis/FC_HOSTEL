<?php
$con= mysqli_connect('127.0.0.1','root','');
if (!$con) {
	echo "Not Connected to server";
}
if (!mysqli_select_db($con,'fc_hostel')) {
	echo "DataBase not selected";
}
if (isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

//inserting comment//
$sql = "INSERT INTO admin(username, password,) values ('$username', '$password')";

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE username='$username' and password ='$password'";

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){	
	header("refresh:0.005;url=../php/booking.php");
   }
	else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
header("refresh:0.005;url=../index.html");
}
}
?>