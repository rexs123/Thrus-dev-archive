<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* portfolio.php

*/
include("./sys/config.php");
$PageName = "Our Portfolio";
include("./theme/header.php");
include("./theme/navbar.php");
?>
<div class="container">
	<h1 class="text-center text-header">Our past <em>Work</em></h1>
	<div class="row">
	<?php
	$sql = "SELECT * FROM portfolio";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	?>
		<div class="col-md-4">
			<div class="portfolio-box">
				<a href="<?php echo $row['url'];?>">
					<div style="background: url(<?php echo $row['image'];?>); background-size: cover; background-position: center;" class="portfolio"></div>
				</a>
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