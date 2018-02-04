<?php
/*

* By Rexsdev.com
* Built for Thrus-dev.com
* Version 1
* Copyright 2015 (C) Thrus-dev. All rights reserved
* index.php

*/
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if (file_exists("./theme/" . $page . ".php")) {
		include("./theme/" . $page . ".php");
	} else {
		include("./theme/404.php");
	}
} else {
	include("./theme/main.php");
}
?>