<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
  <!--datatable-->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />

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
        border-color: #000000;
  }

  tbody{
    color: #000000;
    border-color: #000000;
  }
  .nav-item {
        padding-right: 2px; 
        margin-top: 2px;    
      }
    
    .btn{   
    margin-top: 8px;
    margin-left: 400%;
   }
    
    samp{
    float: right;
   }
  
  .dropdown-menu{   
   background: rgba(0,0,0,0.5);
   width: 100%;
   height: 130px;
   
   }

   h6{
    float: right;
   }
 samp{
  color: #fff;
  float: left;
  margin-left: 8px;
  font-size: 18px;
  font-weight: bold;
   }

  </style>

  <title>FC HOSTEL, AKYAWKROM</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <img src="img\fc_logo.gif"><a class="navbar-brand"><h5>FC HOSTEL, AKYAWKROM</h5></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="booking.php"><h5>CUSTOMER BOOKING</h5></a>
      </li>&nbsp;
      <li class="nav-item">

     <li class="nav-item">
        <a class="nav-link" href="hall_booking.php"><h5>HALL</h5></a>
      </li>&nbsp;
       <li class="nav-item">
        <a class="nav-link" href="comment.php"><h5>COMMENT</h5></a>
      </li>&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="stafftable.php"><h5>STAFF</h5></a>
      </li>    
     
     <li class="nav-item">
     <a href="../index.html" class="btn btn-info btn-sm"> LOG OUT</a> 
     </li> 
    </ul>
  </div>  
</nav>

<!--BACKGROUND IMAGE-->
<div class="col-sm-12" id="img" style=" text-align: center; padding: 20px;">
        <img src="../img/fc_logo.gif">
        <h3 style="color: #28a745;"> FC HOSTEL, AKYAWKROM </h3>
        <h4 style="color: #28a745;">Treating you as a King/Queen</h4>
        
      </div>
    </div>
    <br>

<div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
    <h6>CUSTOMER HALL BOOKING</h6><br>
    <div class="table table-hover table-responsive" >
      <table  class="table table-bordered table-responsive" id="hall_data" style="border-color: #000000;">
        <thead>
          <tr>
      <td>ID</td>
    <td>Company Name</td>    
    <td>Email/Website</td>
    <td>Phone Number</td>
    <td>Address</td>
    <td>Check In Date</td>
    <td>Check Out Date</td>
    <td>Hall Type</td>
    <td>Location</td>
    </tr>
        </thead>
      <tbody>
      <?php


      $conn = new mysqli('localhost', 'root', '', 'fc_hostel');
      $sql = $conn->query('SELECT * FROM hall ORDER BY ID DESC');
             while ($data = $sql->fetch_array()) 
    
      {
       echo '
         <tr>
         <td>'. $data["ID"]. '</td>
         <td>'. $data["Company_Name"] .'</td>         
         <td>'. $data["Email"] .'</td>
         <td>'. $data["Phone_Number"] .'</td>
         <td>'. $data["Address"] .'</td>
         <td>'. $data["Check_In_Date"] .'</td>
         <td>'. $data["Check_Out_Date"] .'</td>
         <td>'. $data["Hall_Type"] .'</td>
         <td>'. $data["Location"] .'</td>
         
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

 <script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <script>
  $(document).ready(function(){
    $("#hall_data").DataTable();
  });
  
</script>
</body>
</html>











