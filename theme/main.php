<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* main.php

*/
$PageName = "Home";
include("./sys/config.php");
include("./sys/function.php");
include("./theme/header.php");
include("./theme/navbar.php");
?>
<div class="container">
	<h1 class="text-center text-header">Welcome to <em>Thrus</em></h1>
	<div class="col-md-12 text-center">
		<p class="paragraph">Welcome to Thrus-Dev. We're a team of professional and extremely capable developers that have one goal: To satisfy the client. All of our developers have had years of experience whether it be java or CSS. We're not any ordinary development company, we're Thrus-Dev, a company and team that cares about our clients and strives to create a master piece of code no matter the size. Big or small we have you covered. So what are you waiting for? Get in contact with us today!</p>
	</div>
	<div class="row">
		<div class="col-md-4 text-center">
			<img class="img-center img-responsive hvr-float" src="https://i.gyazo.com/4fbdc6408fc34b593013c3fc105bb8f5.png"></img>
			<h2 class="text-subheader">Quality</h2>
			<hr class="soften">
			<p>Our developers take pride and put a great amount of effort into their work so we can please you, the client. If you order from Thrus-Dev you won't be receiving sloppy code, you'll be receiving nothing less than our best work.</p>
		</div>
		<div class="col-md-4 text-center">
			<img class="img-center img-responsive hvr-float" src="https://i.gyazo.com/0326ab377aef15547d667b40f537184b.png"></img>
			<h2 class="text-subheader">Affordable</h2>
			<hr class="soften">
			<p>We understand that not everyone can afford high quality, or even decent development services. Because of this our prices are aimed for everyone. We have no reason to overcharge and believe it's wrong which is why we refuse to do it.</p>
		</div>
		<div class="col-md-4 text-center">
			<img class="img-center img-responsive hvr-float" src="https://i.gyazo.com/e7d616527d6340f431d5ab42b431d598.png"></img>
			<h2 class="text-subheader">Convenient</h2>
			<hr class="soften">
			<p>You shouldn't have to search  for hours to find an individual or team that can suit your development needs. For this exact reason our team works around the clock so we can finish your order in a timely and efficient manner.</p>
		</div>
	</div>
</div>
<div class="padder-small"></div>
<div class="container">
	<div class="row">
		<div class="col-md-3 box">
			<h1 class="huge text-golden text-center hvr-bob"></h1>
		</div>
		<div class="col-md-9 box-dark text-center">
			<h1 class="thin">PENDING ORDERS</h1>
			<p>This means we currently have <strong class="text-golden"> </strong> pending orders, if you're to order now once it is accepted you will be added to the queue.</p>
		</div>
	</div>
</div>
<div class="padder-small"></div>
<?php
include("./theme/footer.php");
?>