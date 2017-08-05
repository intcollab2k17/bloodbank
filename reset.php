<?php 

include('includes/dbcon.php');
	
	$email = $_POST['email'];
	
    $query = mysqli_query($con, "SELECT * FROM donor WHERE donor_email='$email'")or die(mysqli_error($con));
      $count=mysqli_num_rows($query);

        if ($count > 0)
        {
            $string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $code="";
            $limit=5;
            $i=0;
            while($i<=$limit)
            {
                $rand=rand(0,61);
                $code.=$string[$rand];
                $i++;
            }
            mysqli_query($con,"UPDATE donor SET donor_password='$code' where donor_email='$email'")or die(mysqli_error($con));

            ini_set( 'display_errors', 1 );
    
            error_reporting( E_ALL );
            
            $from = "info@bloodbank.com";
            
            $to = "$email";
            
            $subject = "Password Reset";
            
            $message = "Your password has been reset. Your new password is $code.";
            
            $headers = "From:" . $from;
            
            mail($to,$subject,$message, $headers);
                
                    echo "<script type='text/javascript'>alert('Successfully reset password! Kindly check your email.');</script>";
                    echo "<script>document.location='login.html'</script>";   
        }
	
	       else
           {
                echo "<script type='text/javascript'>alert('Email address not found!');</script>";
                echo "<script>document.location='login.html'</script>";  
           }	
?>