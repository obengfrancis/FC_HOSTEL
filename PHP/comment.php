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

$username=filter_input(INPUT_POST, 'username');
$email=filter_input(INPUT_POST, 'email');
$comment=filter_input(INPUT_POST, 'comment');


//inserting comment//
$sql = "INSERT INTO comment(username, email, comment) values ('$username', '$email', '$comment')";

if (mysqli_multi_query($con, $sql)) {
		echo  "<script type='text/javascript'>alert('Your comment submitted successfully')</script>";
	} 
	else{  
  	echo "<script type='text/javascript'>alert('Your comment not submitted')</script>";
  }
 
header("refresh:0.05; url=../booking.php")

?>
