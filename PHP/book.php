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



$Full_Name=filter_input(INPUT_POST, 'Full_Name');
$Email=filter_input(INPUT_POST, 'Email');
$Phone_Number=filter_input(INPUT_POST, 'Phone_Number');
$Relative_Number=filter_input(INPUT_POST, 'Relative_Number');
$Check_In_Date=filter_input(INPUT_POST, 'Check_In_Date');
$Check_Out_Date=filter_input(INPUT_POST, 'Check_Out_Date');
$Room_Type=filter_input(INPUT_POST, 'Room_Type');
$Company_Name=filter_input(INPUT_POST, 'Company_Name');
$Number_Of_Person=filter_input(INPUT_POST, 'Number_Of_Person');
$Number_Of_Room=filter_input(INPUT_POST, 'Number_Of_Room');




	$sql = "INSERT INTO booking (Full_Name, Email, Phone_Number, Relative_Number, Check_In_Date,  Check_Out_Date, room_type, Company_Name, Number_Of_Person, Number_Of_Room) values ('$Full_Name',  '$Email', '$Phone_Number', 
	  '$Relative_Number', '$Check_In_Date', '$Check_Out_Date', '$Room_Type', '$Company_Name', '$Number_Of_Person', '$Number_Of_Room')";
	  
	if (mysqli_multi_query($con, $sql)) {
		echo "<script type='text/javascript'>alert('Your booking records submitted successfully')</script>";
		 
		 header("refresh:0.05; url=../index.html");
	} 

	else{  
  	echo "<script type='text/javascript'>alert('Your booking records not submitted')</script>";
  	header("refresh:0.05; url=../index.html");
  	  }

?>
