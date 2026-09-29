<?php
	session_start();

	if(!isset($_SESSION['lang_id'])) {
		$_SESSION['lang'] = "en";
		$_SESSION['lang_id'] = 1;
	}
?>
