 <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">Hello <?php echo $user_row['user_last']. " " .$user_row['user_first'];?></h5>
                  
                </div>
                <br />
            </div>
            <ul id="menu" class="collapse">                
                <!-- <li class="panel active">
                    <a href="donor_exam_final.php" >
                        <i class="icon-table"></i> Dashboard                       
                    </a>                   
                </li> -->
                <li><a href="daily.php"><i class="icon-calendar"></i> Daily Transaction </a></li>
                <li><a href="donors_list.php"><i class="icon-calendar"></i> Donors List </a></li>
               
            </ul>

        </div>