<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style type="text/css">

body {
    background-image: url(img/nature3.jpeg);
     background-size: cover;
   
    font-family: sans-serif;
    margin: 0px;
    padding: 0px
}

   .loginbox{
           width: 360px;
           height: 450px;
           background: #444;
           color: #fff;
           top: 55%;
           left: 50%;
           background: rgba(0,0,0,0.5);
           position: absolute;
           transform: translate(-50%, -50%);
           box-sizing: border-box;           
           padding: 60px 30px;
   }

     .nature {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
        padding-top: 10px;
        padding-bottom: 10px;
     }

     h3 {
        margin: 0;
        padding: 0 0 40px;
        text-align: center;
        font-family:serif;
        font-size: 22px;
        color: #ff0000;

     }
     
     .loginbox label {
               margin: 0px;
               padding: 0px;
               font-weight: bold;

     }
 

     .loginbox input{
        width:100%;
        margin-bottom: 20px;   
     }

     .loginbox input[type="text"], input[type="password"]{
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 20px; 
        
     }

    .loginbox input[type="Number"], input[type="Phone_Number"]{
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 20px; 
        
     }

    .loginbox input[type="submit"]{
        border: none;
        outline: none;
        height: 40px;
        background: #3cb371;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }

    .loginbox input[type="submit"]:hover {
        cursor: pointer;
        background: #ffc107;
        color: #000;
    }

  
  h5 {
       font-family: serif;
    font-weight: bolder;
        color: #28a745;
      }

      h5:hover {
        color: #ff0000;
      }

   

</style>
<title>FC_HOSTEL AKYAWKROM</title>
</head>
<body>
  <nav class="navbar navbar-expand-md bg-light navbar-light">
  <img src="img\fc_logo.gif"><a class="navbar-brand"><h5>FC_HOSTEL AKYAWKROM</h5></a>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="booking.php"><h5>CUSTOMER BOOKING</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comment.php"><h5>COMMENT</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addstaff.php"><h5>ADD STAFF</h5></a>
      </li>  
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

     <li class="nav-item">
     <a href="../index.html" class="btn btn-info btn-sm">LOG OUT</a> 
     </li> 
  </form>       
     </li>
     
    </ul>
  </div>  
</nav>
<br>  
</div>

   <div class="loginbox">
    <img src="img/fc_logo.gif" class="nature">
    
    <h3>ADD NEW STAFF</h3>
    <form action="staff.php" method="POST">
    <label>Staff Name</label><br>
    <input type="text" name="staff_name" placeholder="Enter staff name" required><br>
    <label>Password</label><br>
    <input type="password" name="password" required placeholder="Enter password"><br>
    <label>Phone Number</label><br>
    <input type="Number" name="Phone_Number" placeholder="Enter phone number" required><br>
    
    <input type="submit" name="submit" value="Save staff data">
    </form>       
   </div>

<!--JavaScript plugin-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</body>
</html>
