<?php 
$check_in_date = "";
$check_out_date = "";
$company_name = "";
 if(isset($_POST['Check_In_Date'])) {$check_in_date = $_POST['Check_In_Date'];}
 if(isset($_POST['Check_Out_Date'])) {$check_out_date = $_POST['Check_Out_Date'];}
 if(isset($_POST['Company_Name'])) {$company_name = $_POST['Company_Name'];}
 //if(isset($_POST['Number_Of_Room'])) {$number_of_room = $_POST['Number_Of_Room'];}
 $hall_type = "";
  if (isset($_POST['Hall_Type'])) {$hall_type = $_POST['Hall_Type'];} 



    // this is the code for checking 

    //if ($_POST['Check_In_Date'] == $_POST['Check_Out_Date']) {
       // echo "<script type='text/javascript'>alert('Check in date and Check out date cannot be the same')</script>";
    //} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width, initial scale=1.0" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="https://use.fontawesome.com/5a0e465901.js"></script>
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
  <script  src="js/jquery.js"></script>
  <script  src="js/jquery.datetimepicker.full.min.js"></script>
    <script  src="jquery.datetimepicker.min.css"></script>
    <title>FC_HOSTEL AKYAWKROM</title>

    <script type="text/javascript"></script>

      <style type="text/css">
      /* Make the image fully responsive */
      .carousel-inner img {
      width: 100%;
      height: 450px;
      }

           
   nav ul li a:hover {
    background-color:#343a40;
  }

  nav ul li ul {
    display:block;
    padding-left: 20px;
    position: absolute;
    visibility: hidden;
  }

  nav ul li:hover ul{
    display:block;
    visibility: visible;
    line-height: 0px  1px;
    font-style:bold; 
    background-color:#28a745;
  }

label {
  color: teal;
  font-family: serif;
  font-weight: bold;
}

h2 {

  padding-bottom: 10px;
  color: teal;
  font-family: serif;
  font-weight: bold;
}

h5 {
  color:
  font-family: sans-serif;
  font-weight: bold;
  font-style: italic;
  font-size: 16px;

}

input {
 font-family: serif;
  font-weight: bold;
}

p{
  width: 100%;
  color: #000;
  line-height: 40px;
  font-family: sans-serif;
  font-style: italic;
  font-size: 15px;
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
  <body style="background-color: #dddddd;">

    <!--navigation-->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand"><img src="img/fc_logo.gif"></a>
    <span class="navbar-text " style="padding-right: 60px"><h4 style="color:#28a745;font-family:AR HERMANN;">FCTC HOSTEL, AKYAWKROM</h4>
      <h6 style="color:#000000; font-style: italic; font-family:segoe ui" >Treating you as a King/Queen</h6>
    </span>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" aria-controls="navbar" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
    
     <ul class="navbar-nav">
      <div class="collapse navbar-collapse" id="collapse_target">
      <li class="nav-item active">
        <a class="nav-link" href="index.html"><h6 style="color: #28a745;"><i class="fa fa-home"></i> HOME</h6></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" ><h6 style="color: #28a745;"><i class="fa fa-book"></i>  ROOMS</h6></a>
        <ul class="btn btn-info" data-toggle="collapse" data-target="#demo">
        <a class="nav-link" href="suite.html"><h6 style="color: #ADff2f;">SUITE</h6></a>
        <a class="nav-link" href="executive.html"><h6 style="color: #ADff2f;">EXECUTIVE</h6></a>
        <a class="nav-link" href="standard.html"><h6 style="color: #ADff2f;">STANDARD</h6></a>
        </ul>
      </li>
      <li class="nav-item">
      <a class="nav-link"><h6 style="color: #28a745;"><i class="fa fa-book"></i>  RESTAURANT</h6></a>
      <ul class="btn btn-info" data-toggle="collapse" data-target="#demo">
        <a class="nav-link" href="restaurant.html"><h6 style="color: #ADff2f;">RESTAURANT</h6></a>
        <a class="nav-link" href="bar.html"><h6 style="color: #ADff2f;">DRINK BAR</h6></a>   </ul>

      </li>
      <li class="nav-item">
      <a class="nav-link" ><h6 style="color: #28a745;"><i class="fa fa-book"></i>  AMENITIES</h6></a>
         <ul class="btn btn-info" data-toggle="collapse" data-target="#demo">
        <a class="nav-link" href="conference.html"><h6 style="color: #ADff2f;">CONFERENCE HALL</h6></a>
        <a class="nav-link" href="mini-conf.html"><h6 style="color: #ADff2f;">MINI CONFERENCE</h6>
        <a class="nav-link" href="audio-visual1.html"><h6 style="color: #ADff2f;">AUDIO-VISUAL HALLS</h6></a>
        <a class="nav-link" href="workshop.html"><h6 style="color: #ADff2f;">WORKSHOP</h6></a>
        <a class="nav-link" href="field.html"><h6 style="color: #ADff2f;">FOOTBALL FIELD</h6></a>       
        </ul> 
      </li>

      <li class="nav-item">
        <div class="collapse navbar-collapse" id="collapse_target">
        <a class="nav-link" href="about.html"><h6 style="color: #28a745;"><i class="fa fa-user"></i> ABOUT</h6></a>
      </li>
       <li class="nav-item">
        <div class="collapse navbar-collapse" id="collapse_target">
        <a class="nav-link" href="contact.html"><h6 style="color: #28a745;"> <i class="fa fa-envelope"></i> CONTACT</h6></a>
      </li><br/>

      </ul>
  </div>
  </nav>
  <br/>
  <!--text movement-->
  <h4>
 <marquee  style="padding-top:120px; color: #28a745; font-style: italic; font-family:segoe ui">Welcome to Forestry Commission Training Center Hostel, Akyawkrom-Ejisu: We treat you as Kings and Queens</marquee> 
  </h4>
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
  <h4 style="background-image: url(img/conf1.jpg); height: 300px; background-repeat:round;"> 
  </div>
</div>
</div>
  <br/>


  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <h2>Booking Form || Hall</h2><br>

  <form action="hall_summary.php" method="POST">
    <div class="form-group">
      <div class="col-md-6">
      <label for="username">Company Name:</label>
      <input type="text" class="form-control"  placeholder="Enter your company's name" name="Company_Name" value="<?php echo $company_name; ?>" required>
    </div><br>
    
    
    <div class="form-group">
      <div class="col-md-6">
      <label for="email">Company's Email/ Website:</label>
      <input type="text" name="Email" class="form-control"  placeholder="Enter your company's e-mail or Website"  required>
    </div>
  </div>
    <br>

    <div class="form-group">
      <div class="col-md-6">
      <label for="Phone_number">Company's Number:</label>
      <input type="Number"  name="Phone_Number" class="form-control"  placeholder="Enter your company's telephone number" required>
    </div>
  </div>
    <br>

  <div class="form-group">
      <div class="col-md-6">
      <label for="Address">Company's Address:</label>
      <input type="text"  name="Address" class="form-control"  placeholder="Enter your company's address" required>
    </div>
  </div>
    <br>

   
    <div class="form-group">
      <div class="col-md-6">
      <label for="Check in">Check in date:</label>
      <input type="text" id="datetime" class="form-control" placeholder="Check in date" name="Check_In_Date" 
      value="<?php echo $check_in_date; ?>" required>
      <script>
    $("#datetime").datetimepicker({
      minDate : 0,
    });
  </script>
    </div>
  </div>
    <br>

   <div class="form-group">
      <div class="col-md-6">
      <label for="Check in">Check out date:</label>
      <input type="text" id="datetime2" class="form-control" placeholder="Check out date" name="Check_Out_Date"  value="<?php echo $check_out_date; ?>" required>
      <script>
    $("#datetime2").datetimepicker({
      minDate : 0,
    });

  </script>
    </div>
  </div>
    <br>
   
   <div class="form-group">
      <div class="col-md-6">
      <label for="Room type">Hall Type</label>
      <input type="select" class="form-control" name="Hall_Type" value="<?php echo $hall_type;?>"  placeholder="Choose hall type">
    </div> 
  </div> 
    <br>

  <div class="form-group">
      <div class="col-md-6">
      <label for="location">Company's Location:</label>
      <input type="text"  name="Location" class="form-control"  placeholder="Enter your company's location" required>
    </div>
  </div>
    <br>
<!--
  <div class="form-group">
      <div class="col-md-6">
      <label for="persons">Number of persons:</label>
      <input type="Number" name="Number_Of_Person" class="form-control" placeholder="Enter number of persons" value="<?php echo $number_of_person; ?>" required>
    </div>
    </div>
    <br>
  <div class="form-group">
      <div class="col-md-6">
      <label for="persons">Total number of Rooms:</label>
      <input type="Number" name="Number_Of_Room" class="form-control"   placeholder="Enter number of rooms" value="<?php echo $number_of_room; ?>" required>
    </div>
    </div>-->
    
   <div class="form-group">
      <div class="col-md-6">
    <button type="submit" name="submit" class="btn btn-success">Submit Booking</button>
   </div>
   </div>
 </div>
</form>
  </div>



  <div class="col-sm-4">
   <h2>Disclaimer</h2><br>
   <h5>Check out time is 12pm prompt</h5>
   <h5>
   <marquee direction="up" scrollamount="3"  height="330">
    <p>NOTE: ----WE/I hereby agree that  it is a condition of my/our occupation of the FCTC hostel. We/I will not hold the management or any staff responsible for loss of damage of any property brought by me/us to the FCTC hostel
    I hereby further acknowledge that i am soley resposible for settlement of the bills in full</p>
    </marquee>
  </h5><br>

  <!--User comments-->
  <h2>comments</h2>
  <form action="PHP/comment.php" method="POST">
  <div class="form-group">
  <label for="user">Your name:</label>
  <input type="text" class="form-control" name="username" placeholder="Enter your name" required>
</div>

<div class="form-group">
  <label for="usr">Your E-mail:</label>
  <input type="text" class="form-control" name="email" placeholder="Enter your E-mail" required>
</div>

 <div class="form-group">
      <label for="comment">Your comment here:</label>
      <textarea class="form-control" rows="6"  name="comment" required></textarea>
    </div>
    <center>
    <button type="submit" value="submit" class="btn btn-success">Submit Your Comment</button>
     </center>
  </form>

    </div> 
  </div>
  </div>
  </div> 
   <br>
   <br>

 <!--Footer--> 
 <div class="container-fluid" id="bottom" style="background-color:#f8f9fa;">  
  <br><div class="container">
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
</div>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--JavaScript plugin-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
  </html>
