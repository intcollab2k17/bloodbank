<?php
include 'session.php';
include 'header.php';
?>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
		<?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Blood Inventory </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                   <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Real Time Blood Inventory
                            </div>

                                                
			<div class="demo-container">
			<div id="graph" class="col-md-12"></div> 
		</div>

                        </div>

                    </div>

                    
                     <div class="col-lg-4">

                        <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <i class="icon-tint"></i>
                                Blood Inventory
                            <div class="btn-group pull-right">
                                <button type="button" data-toggle="dropdown">
                                    <i class="icon-chevron-down"></i>
                                </button>
                            </div>
                            </div>

                            <div class="panel-body">
                                <?php   
           // include 'dbcon.php';                                
            $date=date('Y-m-d');
                    $query1=mysqli_query($con,"select *,COUNT(*) as count from physical_exam natural join blood_exam where remarks='Accepted' and expiry>='$date' GROUP BY blood_type ORDER BY blood_type ASC")or die(mysqli_error($con));
                           while ($row=mysqli_fetch_array($query1)){
                                            
                                    ?>                  
                    <li><?php echo $row['blood_type'];?> &nbsp; : <span><?php echo $row['count'];?></span></li>
<?php }?> 
                            </div>

                            
                        </div>


                    </div>
                </div>
                 
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
<?php   
            
            $date=date('Y-m-d');
                    $query1=mysqli_query($con,"select *,COUNT(*) as count from physical_exam natural join blood_exam where remarks='Accepted' and expiry>='$date' GROUP BY blood_type ORDER BY blood_type ASC")or die(mysqli_error($con));
                           while ($row=mysqli_fetch_array($query1)){
                                            
                                    ?>                  
                    <li><?php echo $row['blood_type'];?> &nbsp; : <span><?php echo $row['count'];?></span></li>
<?php }?>   
                </ul>
            </div>
            

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
    <?php include('script.php');?>
   
    <!-- END PAGE LEVEL SCRIPTS -->

     <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'graph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    spacingBottom: 50,
                    spacingLeft: 35
                },
                title: {
                    text: '',
                    style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '18px', fontSize: '26px' }
                },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '14px', fontSize: '14px' },
                            connectorColor: '#000000',
                            formatter: function() {
                                return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: '',
                    data: []
                }]
            }
            
            $.getJSON("dataresult.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });
            
            
            
        });   
        </script>
        <script type="text/javascript">
    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graphprogram',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  
                  title: {
                      text: 'Total Monthly Sales'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data.php", function(json) {
      options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];
            
            
            
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
      <script src="../assets/js/highcharts.js"></script>
        <script src="../assets/js/exporting.js"></script>

</body>

    <!-- END BODY -->
</html>
