
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">


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
        padding-right: 15px;      
      }
    
    .btn{   
    margin-top: 8px;
    margin-left: 400px;
   }
    
    h6{
    float: right;
   }
  </style>

  <title>FC HOSTEL, AKYAWKROM</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <img src="img\fc_logo.gif"><a class="navbar-brand"><h5>FC HOSTEL, AKYAWKROM</h5></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapse_target">   
    
    <ul class="navbar-nav mr-auto" >
     
      <li class="nav-item active">
        <a class="nav-link" href="report.php"><h5>BOOKING REPORT</h5></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
     <li class="nav-itme">
        <a class="nav-link" href="booking.php"><h5>BACK</h5></a>
      </li>
      
      <li class="nav-item">
      <a href="../index.html" class="btn btn-info btn-sm">LOG OUT </a>
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
    <h6> BOOKING REPORT</h6><br>
    <div class="table table-hover table-responsive">
      <table id="booking_data" class="table table-bordered " style="border-color: #000000">
        <thead>
          <tr>
            <td>CustomerID</td>
            <td>Full Name</td>
            
            <td>email</td>
            <td>Phone Number</td>
            <td>Relative Number</td>
            <td>Check In Date</td>
            <td>Check Out Date</td>
            <td>Room Type</td>
            <td>Company Name</td>
            <td>Number Of Person</td>
            <td>Number Of Room</td>
          </tr>
        </thead>
      <tbody>
      <?php

      $conn = new mysqli('localhost', 'root', '', 'fc_hostel');
      $sql = $conn->query('SELECT * FROM booking ORDER BY CustomerID DESC');
             while ($data = $sql->fetch_array()) 
    
      {
       echo '
         <tr>
             <td>'. $data["CustomerID"]. '</td>
             <td>'. $data["Full_Name"] .'</td>             
             <td>'. $data["Email"] .'</td>
             <td>'. $data["Phone_Number"] .'</td>
             <td>'. $data["Relative_Number"] .'</td>
             <td>'.  $data["Check_In_Date"] .'</td>
             <td>'.  $data["Check_Out_Date"] .'</td>
             <td>'. $data["Room_Type"] .'</td>
             <td>'.  $data["Company_Name"] .'</td>
             <td>'. $data["Number_Of_Person"] .'</td>
             <td>'.  $data["Number_Of_Room"] .'</td>
         </tr>
       ';
      }
      ?>
    </tbody>
      </table>
    </div>
   </div>
<!--search script-->
<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


  <script>
  $(document).ready(function(){
    $("#booking_data").DataTable();
  });
  
</script>
</body>
</html>




























