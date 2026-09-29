<?
	$cacheFile = "cache/top_categories";
	unlink($cacheFile);

	echo "Redirecting...";
	sleep(2);

	header('Location: index.php');
?>
