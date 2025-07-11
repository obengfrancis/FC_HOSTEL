<?php
//create connection
$connect = mysqli_connect("localhost", "root", "", "fc_hostel");
if(isset($_POST["staff_ID"]))

{
	$query = "SELECT 'staff_name','Phone_number'  FROM staff WHERE staff_ID = '". $_POST["staff_ID"]."'";
	$result = mysqli_connect($connect, $query);
	$data = mysqli_fetch_array($result);
	echo json_encode($data);
	}
	?>