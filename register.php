<?php 
 
	  $first=$_POST['first'];
	  $last=$_POST['last'];
	  $mi =$_POST['mi'];
	  $email =$_POST['email'];
	  $password =$_POST['password'];
	  $occupation =$_POST['occupation'];
	  $address =$_POST['address'];
	  $province =$_POST['province'];
	  $city =$_POST['city'];
	  $nationality =$_POST['nationality'];
	  $contact =$_POST['contact'];
	  $telephone =$_POST['telephone'];
	  $gender =$_POST['gender'];
	  $bday =date("Y-m-d",strtotime($_POST['bday']));
	  $date=date("Y-m-d");
	  
		include('includes/dbcon.php');
	      
		$query=mysqli_query($con,"SELECT * from donor where donor_first='$first' and donor_last='$last' and donor_bday='$bday'");
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
					mysqli_query($con,"INSERT INTO donor(donor_first,donor_middle,donor_last,donor_email,donor_password,donor_nationality,donor_occupation,donor_address,donor_city,donor_province,donor_contact,donor_tel,donor_gender,donor_bday,donor_pic) 
					VALUES('$first','$mi','$last','$email','$password','$nationality','$occupation','$address','$city','$province','$contact','$telephone','$gender','$bday','default.gif')")or die(mysqli_error($con));

							$to = $email;
							$subject = "Email Verification";

							$message = "
							<html>
							<head>
							<title>Email Verification for ".$email."</title>
							</head>
							<body>
							<p>This email contains Email !</p>
							<table>
							<tr>
							<th>".$first. ' '.$last."</th>
							<th>Email Verification</th>
							</tr>
							<tr>
							<td><a></a></td>
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

