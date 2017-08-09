<?php
include('session.php');

 if (isset($_POST['update_exam']))
 { 
	 $did = $_POST['did'];	
	 $blood_bag_type = $_POST['blood_bag_type'];
	 $segment_number = $_POST['segment_number'];
	 $time_started = $_POST['time_started'];
	 $time_ended = $_POST['time_ended'];
	 $blood_type = $_POST['blood_type'];
	 $screened_by = $_POST['screened_by'];
	 $hematocrit = $_POST['hematocrit'];
	 $expiry = $_POST['expiry'];
	 
	 
	 mysqli_query($con,"INSERT INTO blood_exam(blood_bag_type,segment_number,time_started,time_ended,user_id,blood_type,hematocrit,expiry,donation_id)	
			VALUES('$blood_bag_type','$segment_number','$time_started','$time_ended','$session_id','$blood_type', '$hematocrit', '$expiry', '$did')")or die(mysqli_error($con)); 
		echo "<script type='text/javascript'>alert('Successfully updated donation details!');</script>";
		echo "<script>document.location='donors_list.php'</script>";
	
} 

