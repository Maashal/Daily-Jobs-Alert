<?php
include('header.php');

 ?>
 
 
 
 
<div class="container">
<div class="row">
<div class="col-lg-12">
	<br>
<br>
<br>


 
 
<h3>Search Result </h3>
<hr>
<?php

if (isset ($_REQUEST['submit'])){


$title = $_POST['q'];

		
		$xyz= "select * from posted_project where title like '%$title%'";
		
		$sql = mysqli_query($con, $xyz);
		
		$sql2 = mysqli_num_rows ($sql);
		
		if (!$sql2 > 0) {
			
			echo "<h3 align='center'> Record not found..!</h3>";
		}
		else {
		
		while ($rows= mysqli_fetch_array($sql)) {
			$id       	= $rows['id'];
			$duration			= $rows['duration'];
			$Budject		= $rows['Budject'];
			$category		= $rows['category'];
			$img        = $rows ['image'];
		}
		?>


<div class="col-md-3" style="margin-bottom:50px">
	<figure class="card card-product" style="    border: 1px solid !important; background-color: #cccccc57 !important; border-radius: 10px !important;">
		<div class="img-wrap"> 
			<img src="admin/uploads/<?php echo $img; ?>" width="250px">
		</div>
		<figcaption class="info-wrap">
			<h4 class="title text-dots" align="center">Experianced Required::<?php echo $duration; ?></h4>
			
			<h3 class="title text-dots btn btn-warning btn-block" align="center">Offered Salery: <?php echo $Budject; ?></h3>
			<h3 class="title text-dots btn btn-primary btn-block" align="center">Job Category: <?php echo $category; ?></h3>
			
			<div class="action-wrap">
				
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->

<?php }} ?>

</div> <!-- row.// -->

</div>
</div> 
<!--container end-->


<br>
<br>
<br>


 
 
 
 
 
 
 
 
 
