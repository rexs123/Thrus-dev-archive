<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* team.php

*/
include("./sys/config.php");
$PageName = "About Thrus-dev";
include("./theme/header.php");
include("./theme/navbar.php");
?>
<div class="container">
	<div class="row">
	<?php
	$sql = "SELECT * FROM team";
	$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$position = $row['position'];
			$location = $row['location'];
			$websiteDB = $row['website'];
			$githubDB = $row['github'];
			$facebookDB = $row['facebook'];
			$twitterDB = $row['twitter'];
			$mcmDB = $row['mcm'];
			$about = $row['about'];
			$avatar = $row['avatar'];
			$social = $githubDB.$facebookDB.$websiteDB.$twitterDB.$mcmDB;
			$facebook = "https://www.facebook.com/$facebookDB";
			$twitter = "https://twitter.com/$twitterDB";
			$github = "https://github.com/$githubDB";
			$mcm = "http://www.mc-market.org/members/$mcmDB/";
			$website = "$websiteDB";


	?>
		<div class="col-md-4 text-center">
			<img src="<?php echo $avatar; ?>" class="img-circle img-center img-control img-responsive" alt="<?php echo $name; ?>">
			<h3 class="text-center header"><?php echo $name; ?> <img src="https://cdn.redstoneapi.com/flags/64/<?php echo $location; ?>.png" class="flag" alt="<?php echo $location; ?>!"></h3>
			<span class="text-center label label-devs"><?php echo $position; ?></span><br><br>
				<?php if(!empty($social)){
				echo '<ul class="list-unstyled list-inline text-center">';
				if(!empty($websiteDB)) { echo '<li><a href="'.$website.'"><i class="fa fa-globe fa-sized-2"></i></a></li>'; }
				if(!empty($githubDB)) { echo '<li><a href="'.$github.'"><i class="fa fa-github-square fa-sized-2"></i></a></li>'; }
				if(!empty($facebookDB)) { echo '<li><a href="'.$facebook.'"><i class="fa fa-facebook-official fa-sized-2"></i></a></li>'; }
				if(!empty($twitterDB)) { echo '<li><a href="'.$twitter.'"><i class="fa fa-twitter-square fa-sized-2"></i></a></li>'; }
				if(!empty($mcmDB)) { echo '<li><a href="'.$mcm.'"><i class="fa fa-cubes fa-sized-2"></i></a></li>'; }
				echo '</ul>';
				}
				?>
			<hr class="soften">
			<p><?php echo $about; ?></p>
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