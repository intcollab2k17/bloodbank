<?php 
session_start();
include('../includes/dbcon.php');

	$id=$_SESSION['id'];
	$qid = $_POST['qid'];
	$program = $_POST['program'];
	$date = date("Y-m-d");
	$time = date("H:i:s");
	 
	mysqli_query($con,"INSERT INTO donation(donor_id,program_id,donation_date,donation_time) VALUES('$id','$program','$date','$time')")or die(mysqli_error($con));
	  	$did=mysqli_insert_id($con);

	mysqli_query($con,"INSERT INTO survey(donation_id,survey_date,survey_status) VALUES('$did','$date','Pending')")or die(mysqli_error($con));

		$survey_id=mysqli_insert_id($con);

		foreach($qid as $val) 
		{	
			$answer = $_POST["answer$val"];
			
			mysqli_query($con,"INSERT INTO answer(question_id,answer,survey_id) VALUES('$val','$answer','$survey_id')")or die(mysqli_error($con));
		}
	
	echo "<script type='text/javascript'>alert('Successfully submitted survey questionnaire! Please wait for the confirmation from the recruitment officer.');</script>";
	echo "<script>document.location='logout.php'</script>";   
	
	
?>