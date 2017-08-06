<?php
 include 'session.php';
 include 'header.php';
 include 'dbcon.php';
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
                        <h2>Nationality Information</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Data For Naitonality
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nationality</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from nationality ORDER BY nationality_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$nationality_id=$row['nationality_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?=$row['nationality']?></td>
												
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
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            <div class="well well-small">
                <button class = "btn btn-success btn-block" data-toggle="modal" data-target="#uiModal"><i class = "icon-plus"></i> Add Nationality</button>
            </div>
           <?php include 'add_nationality_modal.php';?> 
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>


    $("#date").mask("99/99/9999");
</body>
    <!-- END BODY-->
    
</html>
