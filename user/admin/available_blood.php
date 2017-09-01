<?php
 include 'session.php';
 include 'header.php';

 ?>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Inventory</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Blood Inventory
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!-- <th>Donor Full name</th> -->
                                            <th>Blood Type Donated</th>
                                            <th>Date Donated</th>
                                            <th>Blood Bag Type</th>
                                            <th>Segment Number</th>
                                            <th>Donation Date</th>
                                            <th>Date Expired</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';
                                    date_default_timezone_set("Asia/Manila"); 
                                     $date = date("Y-m-d");
                                    $expiring = date("Y-m-d",strtotime($date)); 								
                                   
										$query1=mysqli_query($con,"select * FROM blood_exam LEFT JOIN donation ON donation.donation_id = blood_exam.donation_id LEFT JOIN donor ON donor.donor_id = donation.donor_id")or die(mysqli_error($con));
                                        while ($row=mysqli_fetch_array($query1)){
                                            
									?>  
                                        <tr class="odd gradeX">
                                           <!--  <td><?php echo $row['donor_first']. " ".$row['donor_middle']." ".$row['donor_last'];?></td> -->
                                            <td><?php echo $row['blood_type'];?></td>
                                            <td><?php echo $row['donation_date'];?></td>
                                            <td><?php echo $row['blood_bag_type'];?></td>
                                            <td><?php echo $row['segment_number'];?></td>
                                            <td><?php echo date("F d, Y", strtotime($row['donation_date']));?></td>
                                           <td> <?php echo date("l, F d, Y", strtotime($row['expiry']. '+ 30 days')); ?></td>

                                        </tr> 
										<?php }?>									
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>


                    </div>
                </div>
                <hr>
            </div>
        </div>
       <!--END PAGE CONTENT -->
             <div id="right">
<?php
    date_default_timezone_set("Asia/Manila"); 
    $date = date("Y-m-d");
    $expiring = date("Y-m-d",strtotime($date. " + 3 days")); 

    $avail=mysqli_query($con,"select COUNT(*) as blood from blood_exam where expiry>='$date'")or die(mysqli_error($con));
            $rowa=mysqli_fetch_array($avail);
?>                     
            <div class="well text-center">
                <a class="quick-btn" href="available_blood.php">
                    <i class="icon-tint icon-5x text-blue"></i>
                        <span> Available </span>
                        <span class="label label-success icon-2x" style="margin-right: -20px">
                        <?php echo $rowa['blood'];?></span>
                </a>
            </div>

<?php     
    $date = date("Y-m-d");
    $expiring = date("Y-m-d",strtotime($date. " + 3 days")); 
    $querycount=mysqli_query($con,"select COUNT(*) as count from blood_exam LEFT JOIN donation ON donation.donation_id = blood_exam.donation_id LEFT JOIN donor ON donor.donor_id = donation.donor_id WHERE blood_exam.expiry <= '$expiring'")or die(mysqli_error($con));
        $rowcount=mysqli_fetch_array($querycount);
?>         
            <div class="well text-center">
                <a class="quick-btn" href="expired_blood.php">
                    <i class="icon-tint icon-5x text-red"></i>
                        <span> Expired Blood </span>
                        <span class="label label-danger icon-2x" style="margin-right: -20px">
                        <?php echo $rowcount['count'];?></span>
                </a>
            </div>
<?php
    $query=mysqli_query($con,"select COUNT(donor_id) as donor from donation natural join physical_exam group by donor_id")or die(mysqli_error($con));
            $count=0;    
            while($row=mysqli_fetch_array($query)){
               $count=$count+1;
            }
?>                     
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-user icon-5x text-red"></i>
                        <span> Donors </span>
                        <span class="label label-primary icon-2x" style="margin-right: -20px">
                        <?php echo $count;?></span>
                </a>
            </div>
            
        </div>
            <!-- RIGHT STRIP  SECTION -->

        </div>
     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <?php include('script.php');?>
        <script>
            $(function () { formInit(); });
        </script>
</body>
    <!-- END BODY-->
    
</html>
