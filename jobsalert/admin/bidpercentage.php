<?php 
include("header.php");
include ("db.php");
?>


  <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
		table, th, td {
	text-align: center;
}
    </style>



<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#myTable').DataTable();
    
});
</script>



<div class="container">
	<div class="row" style="    margin-top: 75px;">
	
		<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Bid Percenatge</h3>
	<br>
	
		<table id="myTable" class="table table-bordered table-responsive">
		    <thead>
		        <tr>
    		       
    		        
    		        
					<th>Total Successfull Bid</th>
					<th>Total Bid</th>
					<th>Bid Percentage</th>
					
	        
			
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from bid_percentage";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						?>
						
						
					<td> <?php echo $row['successfullbid']; ?> </td>
					<td> <?php echo $row['totallbid']; ?> </td>
					<td> <?php echo $row['percentage']; ?> </td>
					
				
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
	</div>
</div>