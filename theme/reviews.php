<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* reviews.php

*/
$PageName = "Reviews";
include("./sys/config.php");
include("./sys/function.php");
include("./theme/header.php");
include("./theme/navbar.php");
?>
<div class="container">
	<div class="row">
<?php
$sql = "SELECT * FROM reviews";
$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$client = $row['client'];
		$review = $row['review'];
		$site = $row['site'];
		$stars = $row['stars'];
	switch($stars){
		case "1":
		$rating = '<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star text-gray fa-2x"></i>
					<i class="fa fa-star text-gray fa-2x"></i>
					<i class="fa fa-star text-gray fa-2x"></i>
					<i class="fa fa-star text-gray fa-2x"></i>';
		break;
		
		case "2":
		$rating = '<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star text-gray fa-2x"></i>
					<i class="fa fa-star text-gray fa-2x"></i>
					<i class="fa fa-star text-gray fa-2x"></i>';
		break;
		
		case "3":
		$rating = '<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star text-gray fa-2x"></i>
					<i class="fa fa-star text-gray fa-2x"></i>';
		break;
	
		case "4":
		$rating = '<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star text-gray fa-2x"></i>';
		break;
	
		case "5":
		$rating = '<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>
					<i class="fa fa-star fa-2x text-golden hvr-bob"></i>';
		break;
	}
		
?>
		<div class="col-md-4">
			<div class="panel panel-reviews">
				<div class="panel-heading">
					<h3 class="panel-title-reviews"><strong class="text-golden"><?php echo $client; ?></strong> from, <?php echo $site; ?></h3>
				</div>
				<div class="panel-body-reviews">					
					<?php echo $review; ?>
					
				
				</div>
				<div class="panel-footer text-center"><?php echo $rating; ?></div>
			</div>
		</div>
<?php
		}
	}
	?>
	
	</div>
</div>
<?php
include("./theme/footer.php");
?>