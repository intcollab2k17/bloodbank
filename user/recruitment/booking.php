 <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         Booking Date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Time
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Program Name
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
<?php
    
    $query=mysqli_query($con,"select * from booking where donor_id ='$donor_id' order by booking_date desc")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
                if ($row['status']=='0')
                    $status="Walk-in";
                else
                    $status=$row['program_name'];
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo date("M d, Y",strtotime($row['booking_date']));?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo date("h:i A",strtotime($row['booking_time']));?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo $status;;?>
                                    </th>
                                    
                                </tr>
<?php $i++;}?>
                                
                                
                                </tbody>
                                </table>