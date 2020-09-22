<?php
	$_FILES['image']['name'];
	$_FILES['image']['size'];
	$_FILES['image']['type'];
	$_FILES['image']['tmp_name'];
	$_FILES['image']['error'];

	$tmp_name = $_FILES['image']['tmp_name'];
	$dateiname = 'gallery/images/' . $_FILES['image']['name'];
	$dateiname2 = 'gallery/thumbnails/' . $_FILES['image']['name'];
	
	move_uploaded_file($tmp_name, $dateiname);
?>