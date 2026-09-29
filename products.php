<?php
require_once("includes/db_config.php");

$catID = $_GET["cat_id"];

if($stmt = $db->prepare("select model, upc from oc_product p, oc_product_to_category p2c where p.product_id = p2c.product_id and p2c.category_id = ?")) {
	$stmt->bind_param("d", $catID);
	$stmt->execute();
	$stmt->bind_result($modelNo, $productNo);

	while($stmt->fetch())
		printf("Product: %s, %s<br/>", $modelNo, $productNo);
}	

$stmt->close();

$db->close();
?>
