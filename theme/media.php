<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* media.php

*/
$PageName = "Logo &amp; Badges";
include("./sys/config.php");
include("./theme/header.php");
include("./theme/navbar.php");

?>
<div class="container text-center">
	<h1 class="text-center text-header">Badges &amp;<em> Logo's</em></h1>
	<div class="row">
	<?php
	$sql = "SELECT * FROM media";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	?>
		<div class="col-md-6">
			<div class="image-box hvr-float-shadow">
				<a href="<?php echo $row['image'];?>">
					<img src="<?php echo $row['image'];?>" alt="Thrus-dev Wallpaper" class="img-responsive img-center">
				</a>
				<h2 class="logo-name"><?php echo $row['name'];?></h2>
				<pre><?php echo $row['image'];?></pre>
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