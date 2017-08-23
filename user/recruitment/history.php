<table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         Donation Date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Volume
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Weight
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
<?php
    $query=mysqli_query($con,"select * from donation natural join blood_exam where donor_id ='$donor_id' order by donation_date desc")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo date("M d, Y",strtotime($row['donation_date']));?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo $row['volume'];?> mL
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php echo $row['weight'];?> kgs
                                    </th>
                                </tr>
<?php $i++;}?>
                                
                                
                                </tbody>
                                </table>