<?php
	if(isset ($_POST['filename'])){
		unlink('gallery/thumbnails/' . $_POST['filename']);
		unlink('gallery/images/' . $_POST['filename']);
		header ('Location: gallery_scandir.php');
	}	
?>