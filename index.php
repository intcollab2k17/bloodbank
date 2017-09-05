<?php include 'header.php';?>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class = "menu-always-on-top">
 
	<?php include 'mobile_nav.php';?>
 
	<?php include 'slider.php';?>
	
	<?php include 'calendar.php';?>
 
  <div class="about-block content content-center" id="about">
    <div class="container">
		

      <h2><strong>Negros First</strong></h2>
      <h4>Provincial Blood Bank Center</h4>
     <p>The Negros First Provincial Blood Bank Center in Barangay 39 includes an ₱18.9-million structure, a ₱4.2-million fire protection system, and a ₱1-million pathological vault. Negros Occidental was a recipient of the 2012 National Sandugo Award for its outstanding performance in bloodletting activities. DoH records show that it is one of only three provinces that has blood donations from more than 1% of its population.</p>
    </div>
  </div>
  
	<?php include 'panel_menu.php';?>
 
  <?php include 'steps.php';?>
  <div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
      <h2>If you want to be a donor <strong>hit the button below</strong></h2>
      <em><a href = "login.html" class = "btn btn-success">Log in</a> <a href = "signup.php" class = "btn btn-primary">Sign up</a></em>
    </div>
  </div>
 
	<?php include 'team_block.php';?>
  <!-- Team block END -->
  <!-- Portfolio block BEGIN -->
  <?php include 'gallery.php';?>
  <!-- Portfolio block END -->
  <!-- Choose us block BEGIN -->
	
  <!-- Choose us block END -->
  <!-- Checkout block BEGIN -->
  
  <!-- Checkout block END -->
  <!-- Facts block BEGIN -->

  <!-- Facts block END -->
  <!-- Prices block BEGIN -->
 <?php/*  include 'statistics.php'; */?>
  <!-- Prices block END -->
  <!-- Testimonials block BEGIN -->
 
  <!-- Testimonials block END -->
  <!-- Partners block BEGIN -->
 <!--  <div class="partners-block">
    <div class="container">
	  <h2>Partners <strong> Associates	</strong></h2>
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="assets/frontend/onepage/img/partners/cisco.png" alt="cisco">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="assets/frontend/onepage/img/partners/walmart.png" alt="walmart">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="assets/frontend/onepage/img/partners/gamescast.png" alt="gamescast">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="assets/frontend/onepage/img/partners/spinwokrx.png" alt="spinwokrx">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="assets/frontend/onepage/img/partners/ngreen.png" alt="ngreen">
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <img src="assets/frontend/onepage/img/partners/vimeo.png" alt="vimeo">
        </div>
      </div>
    </div>
  </div> -->
  <!-- Partners block END -->
  
  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-6 col-sm-6">
          <div class="copyright">2014 © Metronic One Page. ALL Rights Reserved.</div>
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN SOCIAL ICONS -->
        <div class="col-md-6 col-sm-6 pull-right">
          <ul class="social-icons">
            <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
            <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
            <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
            <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
            <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
            <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
            <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
            <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
          </ul>
        </div>
        <!-- END SOCIAL ICONS -->
      </div>
    </div>
  </div>
  <!-- END FOOTER -->
  <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
  <!--[if lt IE 9]>
  <script src="assets/global/plugins/respond.min.js"></script>
  <![endif]-->
  <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
  <!-- Core plugins BEGIN (For ALL pages) -->
  <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->
  <!-- BEGIN RevolutionSlider -->
  <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script> 
  <!-- END RevolutionSlider -->
  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="assets/global/plugins/jquery.easing.js"></script>
  <script src="assets/global/plugins/jquery.parallax.js"></script>
  <script src="assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <!-- Core plugins END (required only for current page) -->
  <!-- Global js BEGIN -->
  <script src="assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
  <script src="calendar.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      Layout.init();
	  
	  
	  
	  var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		/*  className colors
		
		className: default(transparent), important(red), chill(pink), success(green), info(blue)
		
		*/		
		
		  
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: true,
			defaultView: 'month',
			
			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
				
			},
			
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/',
					className: 'success'
				}
			],			
		});
    });
  </script>
 
  
  <!-- Global js END -->
</body>
</html>