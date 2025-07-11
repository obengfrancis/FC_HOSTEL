<?php
$con= mysqli_connect('127.0.0.1','root','');
if (!$con) {
	echo "Not Connected to server";
}
if (!mysqli_select_db($con,'fc_hostel')) {
	echo "Database not selected";
}
if (isset($_POST['staff_name']) and isset($_POST['password'])){

// Assigning POST values to variables.
$staff_name = $_POST['staff_name'];
$password = $_POST['password'];


//inserting comment//
$sql = "INSERT INTO staff (staff_name, password) values ('$staff_name', '$password')";

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT staff_name, password FROM  `staff` WHERE staff_name='$staff_name' and password ='$password'";

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){	
	header("refresh:0.005;url=../php/booking.php");

   }
	else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
header("refresh:0.005;url=../index.html");
}
}
?>