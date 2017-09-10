<?php
 include 'session.php';
 include 'header.php';
 ?>
 <style>
 textarea.form-control.new {
    height: auto;
    width: 350px !important;
}
 </style>

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

            <div class="inner" style="width: 120%">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Donor Information</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donor List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   

                                        $query1=mysqli_query($con,"select * from donation natural join survey natural join donor natural join program  where survey_status='Accepted' and donation_id NOT IN(select donation_id from physical_exam) ORDER BY survey_id ASC")or die(mysqli_error($con));
                                        while ($row=mysqli_fetch_array($query1)){
                                            $did=$row['donation_id'];
                                            $sid	=$row['survey_id'];                                       

                                    ?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['donor_first'];?></td>  
                                            <td><?php echo $row['donor_middle'];?></td>  
                                            <td><?php echo $row['donor_last'];?></td>  
                                            <td class="center">
                                                <a href="#exam<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#exam<?php echo $did;?>"><i class = "fa fa-pencil"></i>Fill Up Exam</a>
                                                <a href="survey.php?id=<?php echo $did;?>" class="btn btn-primary"><i class = "fa fa-pencil"></i>View Survey Questionaire</a>
                                            </td>
                                        </tr> 
                                        <?php include 'make_exam_modal.php';?>
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
          

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    <!-- END GLOBAL SCRIPTS -->


    <script>
     $(document).ready(function(){
        $('.name-heent').change(function(){
            $selected_value=$('.name-heent option:selected').val();
            if($('.name-heent option:selected').val() ==  'Abnormal' ){
                $('.findings').show();
            }
            else{
               $('.findings').slideUp();
            }
        });
    });
    </script>
    
    <?php include 'script.php';?>

    <script type="text/javascript">     


      Array.prototype.forEach.call(document.body.querySelectorAll("*[data-mask]"), applyDataMask);

function applyDataMask(field) {
    var mask = field.dataset.mask.split('');
    
    // For now, this just strips everything that's not a number
    function stripMask(maskedData) {
        function isDigit(char) {
            return /\d/.test(char);
        }
        return maskedData.split('').filter(isDigit);
    }
    
    // Replace `_` characters with characters from `data`
    function applyMask(data) {
        return mask.map(function(char) {
            if (char != '_') return char;
            if (data.length == 0) return char;
            return data.shift();
        }).join('')
    }
    
    function reapplyMask(data) {
        return applyMask(stripMask(data));
    }
    
    function changed() {   
        var oldStart = field.selectionStart;
        var oldEnd = field.selectionEnd;
        
        field.value = reapplyMask(field.value);
        
        field.selectionStart = oldStart;
        field.selectionEnd = oldEnd;
    }
    
    field.addEventListener('click', changed)
    field.addEventListener('keyup', changed)
}





    </script>


</body>
    <!-- END BODY-->
    
</html>
