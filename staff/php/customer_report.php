<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "fc_hostel";
// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (!$connect ) {
  echo "not connected";
}
// seacrch

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FC HOSTEL, AKYAWKROM</title>
  <meta name="viweport" content="width=device-width, initial scale=1.0" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/bootstrap.bundle.js"></script>
 <script src="../js/onload.js"></script>
 <style type="text/css">
   .col-sm-12 {
  padding-bottom: 150px;
  background-image: url(img/nature3.jpeg);
  
  height: 200px;
}

h5 {
        color: #28a745;
      }

      h5:hover {
        color: #ff0000;
      }
  table tr th {
        padding-top: 10px;
        padding-bottom: 10px;
        color: #28a745;
        text-align: center;
   }

  table tr td {
      text-align: center;
      font-family: sans-serif;
      color: #000000;
    }

 </style>

</head>
<body  onload="noBack();">
  <nav class="navbar navbar-expand-md navbar-light bg-light ">
    <img src="img\fc_logo.gif"><a class="navbar-brand"><h5>FC HOSTEL, AKYAWKROM</h5></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">    
  <ul class="navbar-nav mr-auto" >      
      <li class="nav-itme active">
        <a class="nav-link" href="customer_report.php"><h5>ONE CUSTOMER REPORT</h5></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-itme">
        <a class="nav-link" href="booking.php"><h5>BACK</h5></a>
      </li>
    </ul>

    <form class="form-inline" action="customer_report.php" method="post" enctype="multipart/form-data">
       <input name="searchid" class="form-control" type="text" placeholder="Search Customer ID" required>&nbsp;
       <button class="btn btn-success btn-md" type="submit" name="search">SEARCH</button>&nbsp;
       
      <a href="../index.html" class="btn btn-info btn-md">LOG OUT </a>
    
     </form>
         
  </div>
  </nav>
  <!--BACKGROUND IMAGE-->
  <div class="col-sm-12" style=" text-align: center; padding: 20px;">
        <img src="../img/fc_logo.gif">
        <h3 style="color: #28a745;"> FC HOTEL, AKYAWKROM </h3>
        <h4 style="color: #28a745;">Treating you as a King/Queen</h4>
        
      </div>
    </div><br>
  
<div class="container-fluid">
<h6><< SINGLE CUSTOMER REPORT</h6>
<table class=" table table-hover table-responsive" border="1" style="border-color: #000000;">
          <thead>
    <th>CustomerID</th>
    <th>Full Name </th>    
    <th>Email</th>
    <th>Phone Number</th>
    <th>Relative Number</th>
    <th>Check In Date</th>
    <th>Check Out Date</th>
    <th>Room Type</th>
    <th>Company Name</th>
    <th>Number Of Person</th>
    <th>Number Of Room</th>
  </thead>
  <tbody>
         <?php 
          if (isset($_POST['search'])) {
    $valueToSearch2 = $_POST['searchid'];
   $query = "SELECT * FROM booking where customerID = '$valueToSearch2'";
     $result = mysqli_query($connect,$query);
     while ($row = mysqli_fetch_array($result)) {
      echo"<tr>";
        
        echo "<td>" . $row['CustomerID'] . "</td>"; 
        echo "<td>" . $row['Full_Name'] . "</td>";        
        echo "<td>" . $row['Email'] . "</td>"; 
        echo "<td>" . $row['Phone_Number'] . "</td>"; 
        echo "<td>" . $row['Relative_Number'] . "</td>"; 
        echo "<td>" . $row['Check_In_Date'] . "</td>";
        echo "<td>" . $row['Check_Out_Date'] . "</td>";
        echo "<td>" . $row['Room_Type'] . "</td>";
        echo "<td>" . $row['Company_Name'] . "</td>";
        echo "<td>" . $row['Number_Of_Person'] . "</td>";
        echo "<td>" . $row['Number_Of_Room'] . "</td>";
        
}
}
          ?>
          </tbody>
          </table>
  </div>
  </div>
</div>
</div>
</body>
</html>
