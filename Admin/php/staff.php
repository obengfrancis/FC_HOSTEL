<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fc_hostel";

//create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')' .mysqli_connect_error ());
}

$staff_name=$_POST[ 'staff_name'];
$password=$_POST['password'];
$Phone_Number=$_POST['Phone_Number'];


//inserting comment//
$staff = "INSERT INTO staff(staff_name, password, Phone_Number) values ('$staff_name', '$password', '$Phone_Number')";
  $result = mysqli_query($con, $staff);
    {
	
		
  	echo "<script type='text/javascript'>alert('Staff data already exist')</script>";
  }
 
header("refresh:0.05; url=../php/stafftable.php");

?>
