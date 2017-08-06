<?php
 include 'session.php';
 $name=$_POST['name'];
 $id=$_POST['id'];
 mysqli_query($con,"UPDATE agency SET agency_name='$name' where agency_id='$id'")or die(mysqli_error($con)); 
 echo "<script type='text/javascript'>alert('Successfully updated agency!');</script>";
 echo "<script>document.location='agency.php'</script>";  
	
?>