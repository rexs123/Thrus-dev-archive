<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* 404.php

*/
include("./theme/header.php");
?>
<style>
.error {
  margin: 0 auto;
  text-align: center;
}
@media (min-width: 768px) {
	.error-code {
		color: #222;
		font-size: 228px;
	}
}@media (max-width: 768px) {
	.error-code {
		color: #222;
		font-size: 80px;
	}
}	
.error-desc {
  font-size: 16px;
  color: #666;
}

</style>
<div class="error">
	<div class="error-code m-b-10 m-t-20"><i class="fa fa-warning text-golden"></i>	404</div>
	<h3 class="font-bold">We couldn't find the page..</h3>
	<div class="error-desc">
		Sorry, but the page you are looking for was either not found or does not exist. <br/>
		Try refreshing the page or click the button below to go back to the Homepage.
	<div class="padder-small"></div>
		<a class="btn btn-warning btn-lg" href="https://thrus-dev.com/">
			<i class="fa fa-arrow-left"></i> GO BACK                        
		</a>
	</div>
</div>