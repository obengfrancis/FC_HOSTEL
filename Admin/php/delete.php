<?php 
if (isset($_GET['id'])) {
	# code...
	echo $_GET['id'];
	$conn = new mysqli('localhost', 'root', '', 'fc_hostel');
			$sql = $conn->query('DELETE FROM staff WHERE staff_ID='.$_GET['id'].' ');
			if ($sql) {
			echo "<script type='text/javascript'>alert('Staff data deleted')</script>";
			}else{
			echo "<script type='text/javascript'>alert('Error occured somewhere')</script>";
			}
}
header("refresh:0.05; url=../php/stafftable.php");
?>