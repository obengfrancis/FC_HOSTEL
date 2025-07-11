<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fc_hotel";

//create connection
$conn = new mysqli('localhost', 'root', '', 'fc_hotel');

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')' .mysqli_connect_error ());
}


	if (isset($_POST['staff_ID'])) {

		$staff_ID = $_POST['staff_ID'];


			

		$fetch = "SELECT *  FROM staff WHERE staff_ID = '$staff_ID'";
		$result =mysqli_query($conn, $fetch);
		while ($data = mysqli_fetch_array($result)){
			echo '
         <tr>
                <td>'. $data["staff_ID"] .'</td>
		   		<td>'. $data["staff_name"] .'</td>		   		
		   		<td>'. $data["Phone_Number"] .'</td>
		   		<td>'. $data["Date_Time"] .'</td>
          </tr>
          ';
		}
	}
    
?>
			

			
	
	
	

	 <div class="form-group">
            <label>Staff ID</label>
            <input type="text" name="staff_ID" id="staff_ID" class="form-control" value="<?php echo $staff_ID; ?>" readonly="">
           </div>
           

	        <div class="form-group">
            <label>Staff Name</label>
            <input type="text" name="staff_name" id="staff_name" class="form-control" value="<?php echo $staff_name?>">
           </div>           
            
            <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="Phone_Number" id="Phone_Number" class="form-control" value="<?php echo $phone_number?>">             
          </div> 
        </div>
        
     