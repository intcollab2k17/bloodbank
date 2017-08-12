<div class="modal fade" id="update<?=$row['program_id'];?>" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H1">Edit Program</h4>
                                        </div>
                                        <div class="modal-body">
                                    <form role="form" method="post" action="program_update.php">
                                        <div class="form-group">
                                            <label>Program Name</label>
                                            <input type = "hidden" value = "<?=$row['program_id']?>" name = "program_id">
                                            <input class="form-control" name="name"  value = "<?=$row['program']?>" placeholder="Name of Program" required>
                                            <p class="help-block">Name of Program</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Program Address</label>
                                            <input class="form-control" placeholder="Street, Purok, Brgy" name="address" value = "<?=$row['program_address']?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" tabindex="4" name="city" required>
                                                <?php
                                                    $query2=mysqli_query($con,"select * from city order by city_name")or die(mysqli_error());
                                                            while($row=mysqli_fetch_array($query2)){
                                                ?>
                                                       <option value="<?php echo $row['city_id'];?>"><?php echo $row['city_name'];?></option>
                                                                  <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="dp1">Date</label>
                                                <input type="text" class="form-control" name = "date" value ="<?=$program_date;?>" />                     
                                        </div>                                


                                        <div class="form-group">
                                            <label class="control-label" for="dp1">Time</label>
                                            <div class="input-group bootstrap-timepicker">
                                                                <input class="form-control timepicker-default" name = "time" type="text" value = "<?=$row['program_time']?>"/>
                                                                    <span class="input-group-addon add-on"><i class="icon-time"></i></span>                                                     
                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Agency</label><br/>
                                            <select class="form-control" id = "agency" tabindex="4" name="agency[]" multiple="multiple">

                                                <?php
                                                    $query2=mysqli_query($con,"select *,agency.agency_id as aid,linkages.agency_id as lid from agency  LEFT JOIN linkages ON linkages.agency_id = agency.agency_id WHERE program_id = '$id'")or die(mysqli_error());
                                                            while($row=mysqli_fetch_array($query2)){
                                                               if ($row['aid'] == $row['lid']){                                   
                                                               $status="selected";     
                                                               }
                                                ?>
                                                       <option value="<?php echo $row['agency_id'];?>" <?=$status;?>><?php echo $row['agency_name'];?></option>
                                                         
                                                <?php }?>

                                                    <?php 
                                                        $query3=mysqli_query($con, "select * FROM agency")or die(mysqli_error());
                                                            while($row3=mysqli_fetch_array($query3)){
                                                                $agency_id=$row3['agency_id'];

                                                    ?>
                                                    <option value = "<?php echo $row3['agency_id'];?>"><?php echo $row3['agency_name'];?>                                                      
                                                    </option>
                                                    <?php }?>
                                            </select>
                                        </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>
