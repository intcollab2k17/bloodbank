<?php
include('../../includes/dbcon.php');


	 $id = $_POST['program_id'];
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $date = $_POST['date'];
	 $time = $_POST['time'];
	
	
	 
	 mysqli_query($con,"UPDATE program SET program='$name', program_address = '$address', city_id = '$city', program_date = '$date', program_time = '$time' where program_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Branch details!');</script>";
		echo "<script>document.location='programs.php'</script>";
	
	
