 <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">Hello <?php echo $user_row['user_last']. " " .$user_row['user_first'];?></h5>
                  
                </div>
                <br />
            </div>
            <ul id="menu" class="collapse">                
                <li class="panel active">
                    <a href="home.php" >
                        <i class="icon-table"></i> Dashboard                       
                    </a>                   
                </li>


                <li><a href="programs.php"><i class="icon-android"></i> Programs</a></li>
                <li><a href="users.php"><i class="icon-android"></i> Users</a></li>
                <li><a href="schedule.php"><i class="icon-calendar"></i> Schedule</a></li>
                <li><a href="inventory.php"><i class="icon-calendar"></i> Inventory</a></li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-wrench"></i> Maintenance 
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="nationality.php"><i class="icon-angle-right"></i> Nationality </a></li>
                        <li><a href="city.php"><i class="icon-angle-right"></i> City </a></li>
                       <!--  <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Timeline </a></li>
                        <li><a href="pages_social.html"><i class="icon-angle-right"></i> Social </a></li>
                        <li><a href="pages_pricing.html"><i class="icon-angle-right"></i> Pricing </a></li>
                        <li><a href="pages_offline.html"><i class="icon-angle-right"></i> Offline </a></li>
                        <li><a href="pages_uc.html"><i class="icon-angle-right"></i> Under Construction </a></li> -->
                    </ul>
                </li>
                <li><a href="logout.php"><i class="icon-power-off"></i> Log out</a></li>
            </ul>

        </div>