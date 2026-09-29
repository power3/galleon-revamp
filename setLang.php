<?php
	require_once('includes/application.php');

	if(isset($_GET['lang'])) {
		$_SESSION['lang'] = $_GET['lang'];

		if($_GET['lang'] == 'en') {
			$_SESSION['lang_id'] = 1;
		} else {
			$_SESSION['lang_id'] = 2;
		}
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
