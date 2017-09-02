		<script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
		<script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });

         $(document).ready(function(){
   		 $('.select-name').change(function(){
        	if($('.select-name option:selected').text() == "Abnormal"){
        	$('label').show();
       			 }
        	else{
        		$('label').hide();
        	}
    		})
		});

    	</script>
	
	
        