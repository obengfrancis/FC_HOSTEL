<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

          <form class="form" role="form"  action="staff.php" method="post">
          <div class="form-group">
            <label>Staff Name</label>
            <input type="text" name="staff_name" class="form-control" placeholder="Enter full staff name" required >
          </div>
           <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter staff password" required>
            </div>
            
            <div class="form-group">
            <label>Phone Number</label>
            <input type="number" name="Phone_Number" class="form-control" placeholder="Enter staff number" required="">
          </div> 
          <input type="submit"  name="submit" value="Update" class="btn btn-primary" style="float: right;">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         
           </form>

      </body>
      </html>