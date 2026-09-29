<?php
require_once("cms/config.php");

$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($db, "utf8");

if($db->connect_errno) {
	printf("Connect to database failed: %s\n", $db->connect_error);
	exit();
}

?>
