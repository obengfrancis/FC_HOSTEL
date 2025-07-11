<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   
  <!--datatable-->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--CSS CODES-->
  <style type="text/css">
	  	h5 {
			color: #28a745;
		  	}

		 h5:hover {
		  	color: #000000;
		  	}  	 	
	 	#img {
	 padding-bottom: 150px;
	background-image: url(img/nature3.jpeg);
	
	}   
	thead tr {
		color:#28a745;
		text-align: center;
		font-weight: bold; 
        
	}

	tbody{
		color: #000000;
		
	}
	.nav-item {
	  		padding-top: 2px;
	  		padding-right: 15px;  		
	  	}
   
  h6{
    padding-left: 59%;
  }

</style>
<title>FC_HOSTEL AKYAWKROM</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
<img src="img\fc_logo.gif"><a class="navbar-brand"><h5>FC HOSTEL, AKYAWKROM</h5></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="booking.php"><h5>CUSTOMER BOOKING</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hall_booking.php"><h5>HALL</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="comment.php"><h5>COMMENT</h5></a>
      </li>       
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <li class="nav-item">
     <a href="../index.html" class="btn btn-info btn-sm" style="margin-top: 10px;"> LOG OUT</a> 
     </li> 
    </ul>
  </div>  
</nav>
 


<!--BACKGROUND IMAGE-->
 <div class="col-sm-12" id="img" style=" text-align: center; padding: 20px;">
        <img src="../img/fc_logo.gif">
        <h3 style="color: #28a745;"> FC HOSTEL, AKYAWKROM </h3>
        <h4 style="color: #28a745;">Treating you as a King/Queen</h4>
        
</div><br>
  
   
   <div class="container">   	
   <div class="row"> 
   <div class="col-sm-12 col-md-12 col-lg-12"> 
   <div class="display" style="" >
   <table  class="table table-bordered table-hover " style="border:solid 1px;">
     	    <thead>          
   			  <tr>
            <h6>Staff Information</h6>
            <h6><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addstaffModal">
				    ADD NEW STAFF
				    </button></h6>                                 
              <td>STAFF_ID</td>
        			<td>STAFF_NAME</td>					
        			<td>PHONE_NUMBER</td>
        			<td>DATE_AND_TIME</td>
              <td>PASSWORD</td>
              <td>ACTION</td>                  
   				</tr>
   			</thead>
   		<tbody>
   		<?php
   		$conn = new mysqli('localhost', 'root', '', 'fc_hostel');
			$sql = $conn->query('SELECT * FROM staff ORDER BY staff_ID DESC');
             while ($data = $sql->fetch_array()) 		
   		{
   		 echo '
         <tr>
                <td>'. $data["staff_ID"] .'</td>
		   		<td>'. $data["staff_name"] .'</td>		   		
		   		<td>'. $data["Phone_Number"] .'</td>
		   		<td>'. $data["Date_Time"] .'</td>
          <td>**********************</td>
          <td><a href="delete.php?id='.$data["staff_ID"].'" class="btn btn-danger">Delete</a>
          </td>          
        </tr>
   		 ';
   		}
   		 ?>
  	</tbody>
   </table>


    	</div>
   </div>
 </div>
</div>

<!--Add staff Modal  -->
<div class="modal fade" id="addstaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form action="" method="POST">
      <div class="modal-header" style="background-color:rgba(0,0,0,0.2);">
        <h5 class="modal-title" id="myModalLabel">Adding new staff information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 

     <!--Modal body-->   
       <div class="modal-body">
        <div class="form-group">
            <label id="lblstaff_name">Staff Name</label>
            <input type="text" name="staff_name" id="staff_name" class="form-control" placeholder="Enter full staff name">
           </div>
           <div class="form-group">
            <label id="lblpassword">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter staff password">             
            </div>
            
            <div class="form-group">
            <label id="lblPhone_Number">Phone Number</label>
            <input type="number" name="Phone_Number" id="Phone_Number" class="form-control" placeholder="Enter staff number">             
          </div> 
          <input type="hidden" name="staff_ID" id="staff_ID"/>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
           <button type="button"  class="btn mr-md btn-primary" name="save" id="save">Save</button>       
    </div>

    </form>
   </div>
 </div>
</div>
</div>
 
<br>
 
  <script type="text/javascript">
 	$(document).ready(function(){
       
       //add new staff
     $(document).on('click','#save', function(){
      var staff_name = $("#staff_name").val();      
      var password = $("#password").val();
      var Phone_Number = $("#Phone_Number").val();

      if(staff_name == ""){
          $("lblstaff_name").html("Enter staff name");
          alert("staff name is required");
      }else if(password == ""){
      	$("lblpassword").html("Enter staff password");
      	alert("password is required");
      }else if(Phone_Number == ""){
      	$("lblPhone_Number").html("Enter staff phone number");
      	alert("phone number is required");
      }else{
      	$.ajax({
      		url: "staff.php",
      		type: "post",
      		data:{staff_name:staff_name, password:password, Phone_Number:Phone_Number},
      		success:function(data){
      			alert("new staff added successfully");
           $("addstaffModal").modal("show");
      			header("refresh:0.05; url=../php/stafftable.php"); 		
      		}

      	});
    
      }

     });//end of add staff
         
         //datatables
		$(".table").DataTable();
	});
</script>
<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> 
</body>
</html>



























