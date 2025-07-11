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

// Assigning POST values to variables.

$Company_Name = $_POST['Company_Name'];
$Email		  = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$Address      = $_POST['Address'];
$Check_In_Date = $_POST['Check_In_Date'];
$Check_Out_Date = $_POST['Check_Out_Date'];
$Hall_Type     = $_POST['Hall_Type'];
$Location    = $_POST['Location'];

//INSERTING VALUES

	$sql = "INSERT INTO hall (Company_Name, Email, Phone_Number, Address, Check_In_Date,  Check_Out_Date, Hall_Type, Location) values ('$Company_Name',  '$Email', '$Phone_Number', 
	  '$Address', '$Check_In_Date', '$Check_Out_Date', '$Hall_Type', '$Location')";

	 if (mysqli_multi_query($con, $sql)) {
		echo "<script type='text/javascript'>alert('Your hall booking records submitted successfully')</script>";
		 
		 header("refresh:0.05; url=../conference.html");
	} 

	else{  
  	echo "<script type='text/javascript'>alert('Your hall booking records not submitted')</script>";
  	header("refresh:0.05; url=../conference.html");
  	  }

?>
