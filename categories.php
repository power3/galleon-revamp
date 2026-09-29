<?php
	require_once("includes/application.php");
	require_once("includes/catalog.php");

	$_SESSION['lang_id'] = 2;	
	getCategories(0);
	getProducts(0);
	echo "-----<br/>";
	getCategories(20);
	getProducts(20);
	echo "-----<br/>";
	getCategories(59);
	getProducts(59);
	echo "-----<br/>";
	getCategories(60);
	getProducts(60);
	echo "-----<br/>";
	getProductDetail(42);

	$db->close();
?>
