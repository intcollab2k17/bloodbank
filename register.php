<?php 
 
	  $donor_first=$_POST['first'];
	  $donor_last=$_POST['last'];
	  $donor_middle =$_POST['mi'];
	  $donor_email =$_POST['email'];
	  $donor_password =$_POST['password'];
	  $donor_occupation =$_POST['occupation'];
	  $donor_address =$_POST['address'];
	  $donor_province =$_POST['province'];
	  $donor_tel =$_POST['telephone'];
	  $donor_city =$_POST['city'];
	  $donor_nationality =$_POST['nationality'];
	  $donor_age =$_POST['donor_age'];
	  $donor_contact =$_POST['contact'];
	  $donor_telephone =$_POST['telephone'];
	  $donor_gender =$_POST['gender'];
	  $donor_type =$_POST['type'];
	  $donor_preferred =$_POST['preferred'];
	  $donor_bday =date("Y-m-d",strtotime($_POST['bday']));
	  $date=date("Y-m-d");
	  
		include('includes/dbcon.php');
	      
		$query=mysqli_query($con,"SELECT * from donor where donor_first='$donor_first' and donor_last='$donor_last' and donor_bday='$donor_bday'");

		$queryc=mysqli_query($con,"SELECT * from city where city_id='$donor_city'");
				$rowc=mysqli_fetch_array($queryc);

				$zipcode=$rowc['zipcode'];
			$num_rows = mysqli_num_rows($query);

				while($row=mysqli_fetch_array($query)){
			  	$id=$row['donor_id'];}

		if ($num_rows<>0)			
				{
						echo "<script type='text/javascript'>alert('Sorry! You are already registered! You may now login!');</script>";
						echo "<script>document.location='login.html';</script>";

 				}

		else
				{


				/*	mysqli_query($con,"INSERT INTO donor(donor_first,donor_middle,donor_last,donor_email,donor_password,donor_nationality,donor_occupation,donor_address,donor_city,donor_province,donor_contact,donor_tel,donor_gender,donor_bday,donor_agedonor_pic,donor_zipcode,donor_type,donor_preferred) 
		VALUES('$first','$mi','$last','$email','$password','$nationality','$occupation','$address','$city','$province','$contact','$telephone','$gender','$bday', '$donor_age', 'default.gif','$zipcode','$type','$preferred')")or die(mysqli_error($con));  

*/






					mysqli_query($con, "INSERT INTO donor(
						donor_last,
						donor_first,
						donor_middle,
						donor_bday,
						donor_age,
						donor_gender,
						donor_contact,
						donor_tel,
						donor_email,
						donor_password,
						donor_nationality,						
						donor_occupation,
						donor_address,
						donor_city,
						donor_province,	
						donor_preferred
						)VALUES
						(
						'$donor_last',
						'$donor_first',
						'$donor_middle',
						'$donor_bday',
						'$donor_age',
						'$donor_gender',
						'$donor_contact',
						'$donor_tel',
						'$donor_email',
						'$donor_password',
						'$donor_nationality',						
						'$donor_occupation',
						'$donor_address',
						'$donor_city',
						'$donor_province',
						'$donor_preferred'						
						)")or die(mysql_error($con));





							$to = $donor_email;
							$subject = "Email Verification";

							$message = "
							<html>
							<head>
							<title>Email Verification for ".$donor_email."</title>
							</head>
							<body>
							<p>Thank you for Signing up!</p>
							<table>
							<tr>
							<th>".$donor_first. ' '.$donor_last."</th>
							<th>Email Verification</th>
							</tr>
							<tr>
							<td><a> </a></td>
							<td></td>
							</tr>
							</table>
							</body>
							</html>
							";

							// Always set content-type when sending HTML email
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

							// More headers
							$headers .= 'From: <webmaster@example.com>' . "\r\n";
							$headers .= 'Cc: myboss@example.com' . "\r\n";

							mail($to,$subject,$message,$headers);
	
						echo "<script type='text/javascript'>alert('Successfully registered as a donor in NIR Blood Bank! You may now login!');</script>";
						echo "<script>document.location='login.html';</script>";
				}



?>

