<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
</style>

  </head>
  <body>
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body">
    <form action = "register.php" method = "POST" enctype="multipart/form-data">
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">Firstname	</label>
            <input type="text" class="form-control input-sm" name = "first" id="first" placeholder="" required="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="email">Middlename*</label>
            <input type="text" class="form-control input-sm" id="middle" name = "mi" placeholder="" required="">
        </div>

        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Lastname*</label>
            <input type="text" class="form-control input-sm" name = "last" id="mobile" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Birthday*</label>
            <input type="text" class="form-control input-sm" name = "bday" id="bday" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Birthday*</label>
            <input type="number" max-length = "3" class="form-control input-sm" name = "age" id="age" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Gender*</label>
            <input type="text" class="form-control input-sm" name = "gender" id="gender" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Contact Number*</label>
            <input type="text" class="form-control input-sm" name = "contact" id="contact" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Telephone Number*</label>
            <input type="text" class="form-control input-sm" name = "telephone" id="tel" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Occupation*</label>
            <input type="text" class="form-control input-sm" name = "contact" id="contact" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Nationality*</label>
           	 <select class="form-control input-sm" id="nationality" name = "nationality">
				<option disabled="" selected="true">-- Select Your Nationality --</option>
				<?php													
					include('includes/dbcon.php');
					$query1=mysqli_query($con,"select * from nationality order by nationality")or die(mysqli_error());
					 while($row2=mysqli_fetch_array($query1)){
						?>
					<option><?php echo $row2['nationality'];?></option>
				<?php }?>
	      </select>
        </div>
         <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Prefered Mailing Address*</label>
           	 <select class="form-control input-sm" name = "preferred" id="preferred">
				<option>-- Choose your Preffered mailing address --</option>
					<option>Home</option>
					<option>Office</option>
	      </select>
        </div>     


	<div class="form-group col-md-6 col-sm-6">
	      <label for="address">Address*</label>
	      <textarea class="form-control input-sm" id="address" rows="3" name="address"></textarea>
	  </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="city">City/Town</label>
			 <select class="form-control input-sm" name = "city" id="city">
				<option disabled="true" selected="">-- Choose your city --</option>
				<?php		
					include('includes/dbcon.php');
					$query2=mysqli_query($con,"select * from city order by city_name")or die(mysqli_error());
						while($row=mysqli_fetch_array($query2)){
					?>
				<option><?php echo $row['city_name'];?></option>
				<?php }?>
	     	 </select>
	</div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="state">Province*</label>
            <input type="text" class="form-control input-sm"  name  = "province" id="province" placeholder="">
     </div>
     <div class="form-group col-md-6 col-sm-6">
            <label for="state">Email*</label>
            <input type="email" class="form-control input-sm"  name  = "email" id="email" placeholder="" required="true">
     </div>
      <div class="form-group col-md-6 col-sm-6">
            <label for="state">Password*</label>
            <input type="password" class="form-control input-sm"  name  = "password" id="password1" placeholder="" required="true">
     </div>
     <div class="form-group col-md-6 col-sm-6">
            <label for="state">Confirm Password*</label>
            <input type="password" class="form-control input-sm"  id="password2" placeholder="" required="true">
     </div>
 	<div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Donor Type</label>
           	 <select class="form-control input-sm" name = "type" id="donor">
				<option value="" disabled selected>Select Donor Type</option>
				<option>Volunteer</option>
				<option>Others</option>
	      </select>
        </div>
	
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-12 col-sm-12">
		<input type="submit" class="btn btn-primary btn-block" value="Submit"/>
	</div>
</div>
</form>
</div>
</body>
</html>