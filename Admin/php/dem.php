<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
  <!--datatable-->
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
  
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
    padding-left: 65%;
  }


 
  </style>

  <title>FC_HOSTEL AKYAWKROM</title>
  </head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <img src="img\fc_logo.gif"><a class="navbar-brand"><h5>FC_HOSTEL AKYAWKROM</h5></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <li class="nav-item">
     <a href="../index.html" class="btn btn-info btn-sm" style="margin-top: 10px;"> LOG OUT</a> 
     </li> 
    </ul>
  </div>  
</nav>
 


<!--BACKGROUND IMAGE-->
 <div class="col-sm-12" id="img" style=" text-align: center; padding: 20px;">
        <img src="../img/fc_logo.gif">
        <h3 style="color: #28a745;"> FC_HOSTEL, AKYAWKROM </h3>
        <h4 style="color: #28a745;">Treating you as a King/Queen</h4>
        
</div><br>
  
   
   <div class="container"  >
   <div class="row">  
   <div class="col-md-12 col-md-offset-2 "> 

    <h6><button type="button" name="add" id="add" class="btn btn-success" data-toggle="modal" data-target="#add_Modal">
    ADD NEW STAFF
    </button></h6>
    <form class="form-inline">
      <div class="table table-hover table-responsive" style="margin-left: 12%" >

      <table  class="table table-bordered table-hover " style="border-color: #000000; width: 100%">
         

        <thead>          
             <tr>               
                  <td>STAFF ID</td>
                  <td>STAFF NAME</td>         
                  <td>PHONE NUMBER</td>
                  <td>DATE & TIME</td>
                  <td>ACTIONS</td>                 
          </tr>
        </thead>
      <tbody>
      <?php
     
      $conn = new mysqli('localhost', 'root', '', 'fc_hotel');
      $sql = $conn->query('SELECT * FROM staff ORDER BY staff_ID DESC');
             while ($data = $sql->fetch_array()) 
    
      {
      
       echo '
         <tr>
          <td>'. $data["staff_ID"] .'</td>
          <td>'. $data["staff_name"] .'</td>          
          <td>'. $data["Phone_Number"] .'</td>
          <td>'. $data["Date_Time"] .'</td>
          <td>
          
      
         <input type="button" name="view" value="View" id="'.$data["staff_ID"].'" class="btn btn-success view_data" data-toggle="modal" data-target="#view_Modal">
         <input type="button" name="edit" value="Edit" id="'.$data["staff_ID"].'" class="btn btn-primary edit_data" data-toggle="modal" data-target="#edit_Modal">
    

      
          </td>          
         </tr>
       ';
      }
       ?>

      

      <!--add Modal  -->
<div class="modal fade" id="add_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding staff information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php
          include 'add.php';    
          ?>    
          </div>

              
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        <button id="btn" class="btn mr-md btn-primary pull-right">Save</button>
      </div>
</div>
</div>
</div>



<!--Edit Modal  -->
<div class="modal fade" id="edit_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding staff information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   
        
        <!-- Modal body -->
        <div class="modal-body">
                 
          </div>

              
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        <button id="btn" class="btn mr-md btn-primary pull-right">update</button>
      </div>
</div>
</div>
</div>






      <!--View Modal  -->
<div class="modal fade" id="view_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editing staff information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   
        
        <!-- Modal body -->
        <div class="modal-body">
          ............        
          </div>

              
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>       
      </div>
</div>
</div>
</div>
      

    </tbody>
   </table>


      </div>
   </div>
 </div>
</div>


       


<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>

  
  <script type="text/javascript">
  $(document).ready(function(){
   $(document).on('click', '.edit_data', function(){
    var staff_ID = $(this).attr("staff_ID");
    $.ajax({
          url:"fetch.php",
          method:"POST",
          data:{staff_ID:staff_ID},
          dataType:"json",
          success:function(data){

          }

    });
   });


    $(".table").DataTable();
  });



</script>


</body>
</html>



























