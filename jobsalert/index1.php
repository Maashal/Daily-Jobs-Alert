<?php include ('header.php');
 

include('db.php');
 ?>




<?php
		
		$xyz= "select * from job_category";
		
		$sql = mysqli_query($con, $xyz);
		
		while ($rows= mysqli_fetch_array($sql)) {
			$id       	= $rows['id'];
			$name		= $rows['title'];
			$description		= $rows['description'];
			$img		= $rows['image'];
		
		?>


<div class="col-md-3" style="margin:10px; display: run-in;display: inline-block;background-color: gray; width: 320px; border-radius: 10px; padding: 10px;">
	
		<div class="img-wrap" style="text-align: center;"> 
			<img width="230px" height="250px;" src="admin/uploads/<?php echo $img; ?>">
		</div>
		<figcaption class="info-wrap">
			<h4 style="width: 310px;" class="" align="center"><?php echo $name; ?></h4>
			<h4 style="width: 310px;" class="" align="center"><?php echo $description; ?></h4>
			<div class="action-wrap">
<a style="width: 300px;" href="items1.php?view=<?php echo $name; ?>" class="btn btn-warning" >Read More</a>
				
			</div> <!-- action-wrap -->
		<!-- card // -->
</div> <!-- col // -->

		<?php } ?>


    


</div> <!-- row.// -->


</div> 
<!--container end-->


<br>
<br>
<br>



