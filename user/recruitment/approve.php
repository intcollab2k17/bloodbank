<?php include 'session.php';
/*include '../assets/includes/dbcon.php';
*/
	$id = $_REQUEST['id'];
	
		mysqli_query($con,"update survey set survey_status='Accepted' where survey_id='$id'")or die(mysqli_error($con));
		
		/*$result = mysqli_query($con, "select donor_email FROM donor WHERE donor_id = '$id' ")or die(mysqli_error($con));
		$row = mysqli_fetch_array($result);
		echo $row['donor_id'];*/




							




	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";
	
?>
