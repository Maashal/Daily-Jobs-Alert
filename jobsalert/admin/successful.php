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






<div class="container">
	<div class="row" style="  ">
	
		<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Successfull Bids</h3>
	<br>
	
		<table border="2px">
		    <thead>
		        <tr>
    		       
    		        
    		        
					<th>Total Successfull Bid</th>
					<th>Total Bid</th>
					
					
	        
			
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
					
					
				
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
	</div>
</div>