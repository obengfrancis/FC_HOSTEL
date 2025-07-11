<?php 
//displaying booking summary
$check_in_date ="";
$check_out_date ="";
$full_name ="";
$email ="";
$company_name ="";
if(isset($_POST['Full_Name'])) {$full_name = $_POST['Full_Name'];}
if(isset($_POST['Email'])) {$email = $_POST['Email'];}
if(isset($_POST['Phone_Number'])) {$phone_number = $_POST['Phone_Number'];}
if(isset($_POST['Relative_Number'])) {$relative_number = $_POST['Relative_Number'];}
if(isset($_POST['Company_Name'])) {$company_name = $_POST['Company_Name'];}
 if(isset($_POST['Check_In_Date'])) {$check_in_date = $_POST['Check_In_Date'];}
 if(isset($_POST['Check_Out_Date'])) {$check_out_date = $_POST['Check_Out_Date'];}
 if(isset($_POST['Number_Of_Person'])) {$number_of_person = $_POST['Number_Of_Person'];}
 if(isset($_POST['Number_Of_Room'])) {$number_of_room = $_POST['Number_Of_Room'];}
 $room_type = "";
  if (isset($_POST['Room_Type'])) {$room_type = $_POST['Room_Type'];}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width, initial scale=1.0" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/5a0e465901.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  
   
    <title>FC_HOTEL AKYAWKROM</title>

    

      <style type="text/css">
      

label {
  color: teal;
  font-family: serif;
  font-weight: bold;
}

input {
 font-family: serif;
  font-weight: bold;
}
  
 h5{
  color:#6c757d;
  font-family:sans-serif;
  font-size: 14px;
  padding-right: 20px;
  font-style: inherit;
  line-height: 20px;  
 }

 h1{
  font-size: 120%;
  font-family:monospace;
  font-weight: bold;  
 }

 samp{
  
  color: #28a745;  
   font-family: monospace;
  font-size: 130%;
  line-height: 40px;
 }

 samp:hover{
  color: #000; 
 }
   
</style>
</head>
<body style="background-color: #fff;">&nbsp;&nbsp;
  <div class="container">
    <div class="row">
      <div class="col-md-10">
  <form role="form" action="PHP/book.php"  method="POST" class="form">
  <h4>BOOKING SUMMARY&nbsp;||&nbsp; EDIT DATA</h4><br>     
      <div class="col-md-8">
      <div class="form-group">
      <label for="full_name">Full name:</label>
      <input type="text" class="form-control"  placeholder="Enter your full name" name="Full_Name" value="<?php echo $full_name; ?>" required>
    </div>
  </div>
  
         
    <div class="col-md-8">
      <div class="form-group">
      <label for="email">Your Email:</label>
      <input type="text" name="Email" class="form-control"  placeholder="Enter Email"  value="<?php echo $email; ?>"required>
     </div>
   </div>
    
     <div class="col-md-8">
    <div class="form-group">      
      <label for="Phone_number">Your Phone Number:</label>
      <input type="Number"  name="Phone_Number" class="form-control"  placeholder="Enter your number" value="<?php echo $phone_number; ?>" required>    
  </div>
</div>

    
    <div class="col-md-8">
    <div class="form-group">
      <label for="Phone">Your Relative Number:</label>
      <input type="Number"  name="Relative_Number" class="form-control"  placeholder="Enter  your relative number"  value="<?php echo $relative_number; ?>" required>
    </div>
  </div>
  
    
    <div class="col-md-8">
    <div class="form-group">      
    <label for="Check in">Check in date:</label>
    <input type="text" class="form-control" name="Check_In_Date" placeholder="Check in date"
      value="<?php echo $check_in_date; ?>"  required>
  </div>  
  </div>
  
  
   <div class="col-md-8">
   <div class="form-group">     
   <label for="Check in">Check out date:</label>
   <input type="text" class="form-control"  name="Check_Out_Date" placeholder="Check out date"  value="<?php echo $check_out_date; ?>" required>
  </div>  
  </div>

   <div class="col-md-8">
   <div class="form-group">      
      <label for="Room type">Room Type</label>
      <input type="select" class="form-control" name="Room_Type" value="<?php echo $room_type;?>"  placeholder="Enter type of room">
  </div>   
  </div> 
  
  
  <div class="col-md-8">
  <div class="form-group">      
      <label for="company">Your company Name:</label>
      <input type="text" name="Company_Name" class="form-control"  placeholder="Enter your company name" value="<?php echo $company_name; ?>">
    </div>
    </div>    
    

  <div class="col-md-8">
  <div class="form-group">      
      <label for="persons">Number of persons:</label>
      <input type="Number" name="Number_Of_Person" class="form-control" placeholder="Enter number of persons" value="<?php echo $number_of_person; ?>" required>
    </div>
    </div>
    
  <div class="col-md-8">
  <div class="form-group">      
      <label for="rooms">Total number of Rooms:</label>
      <input type="Number" name="Number_Of_Room" class="form-control"   placeholder="Enter number of rooms" value="<?php echo $number_of_room; ?>" required>
    </div>
    </div>
    <br>

    <div class="col-md-12">
   <div class="form-group">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-success">Submit Booking</button>
   </div>
   </div> 
</form>
</div>
 <div class="col-md-2"><h2><a href="index.html" style="text-decoration:none; font-size:150%; color: #000; float: right;"><i class="fa fa-reply "></i></a></h2>
  </div>
</div>
</div>
<br><br>

 <!--Footer--> 
 <div class="container-fluid" id="bottom" style="background-color:#f8f9fa;">  
  <br>
  <div class="container">
 <div class="row">
  <div class="col-md-3">    
    
    <h1>ADDRESS</h1>
    <h5>P. O. Box KS 6424</h5>
    <h5>Kumasi-Ghana</h5>
    <h5>West-Africa</h5>
    <h1>CONTACT</h1>
    <h5>Office Tel:</h5>
    <h5>+233 (0) 322494854</h5>
    <h5>Mobile:</h5>
    <h5>  0246950914/  0261836946</h5>
    
    <br>  
  </div>
  <div class="col-md-2" >
    <h1 >NAVIGATION</h1>
    <a href="index.html" style="text-decoration: none;"><samp>HOME</samp></a><br>
    <a href="about.html" style="text-decoration: none;"><samp>ABOUT</samp><br>
    <a href="contact.html" style="text-decoration: none;"><samp>CONTACT</samp></a><br> 
    <a href="bar.html" style="text-decoration: none;"><samp>BAR</samp></a><br>          
  </div>

 <div class="col-md-2">
   <h1>ROOMS</h1>
   <a href="suite.html" style="text-decoration: none;"><samp>SUITE</samp></a><br>
    <a href="executive.html" style="text-decoration: none;"><samp>EXECUTIVE</samp></a><br>
    <a href="standard.html" style="text-decoration: none;"><samp>STANDARD</samp></a><br><br>
     </div>
     <div class="col-md-3">
    <h1>AMENITIES</h1>
      <a href="restaurant.html" style="text-decoration: none;"><samp>RESTAURANT</samp></a><br>
    <a href="field.html" style="text-decoration: none;"><samp>FOOTBALL FIELD</samp></a><br>
    <a href="conference.html" style="text-decoration: none;"><samp>CONFERENCE HALL</samp></a><br>
    <a href="audio-visual1.html" style="text-decoration: none;"><samp>AUDIO-VISUAL ROOM</samp></a>
 </div>

  <div class="col-md-2">
   <h1>STAFF LOGIN</h1>
   <a href="staff/index.html" style="text-decoration: none;"><samp>Staff Login</samp></a><br><br>
   <h1>FOLLOW US</h1>
   <a href="https://info@fctc.fcghana.org" style="text-decoration: none;"><samp><i class="fa fa-envelope"></i>    E-mail</samp></a><br>
  <a href="https://fc/Hotel.facebook.com" style="text-decoration: none;"><samp><i class="fa fa-facebook-square"></i>     Facebook</samp></a>
  <div>  
 </div> 
</div>
</div>
<br><br>
<center>
   <h5>FORESTRY COMMISSION TRAINING CENTRE HOTEL LIMITED.</h5>
    <h5>ALL RIGHT RESERVED || DEVELOPER: OBENCO SOFTWARES.</h5>      
 </center><br>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--JavaScript plugin-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
  </html>
