<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Bildgalerie">
		<link href="css/lightbox.css" rel="stylesheet">
		<title>Galerie</title>
	</head>
	<body>
		<h1>Galerie</h1>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<input type="file" name="image">
			<br>
			<input type="submit" name="upload" value="Upload">
			<br><br><br>
		</form>
			<?php
			//variabeln deklarieren
			$pathThumbnails = "gallery/thumbnails/";
			$pathImages = "gallery/images/";
			
			$files = scandir($pathThumbnails);
			
			//print_r($files); die;
			
			foreach ($files as $filename) {
				if (is_file($pathThumbnails . $filename)) {
					//namen ändern (jpg weg)
					$phrase = $filename;
					$old = array(".jpg", "_");
					$new = array("", " ");
					$newphrase1 = str_replace($old, $new, $phrase);
					
					/*
					$newphrase = $newphrase1;
					$umlaute = array( 
						$umlaute1 = array('Ae', 'Oe', 'Ue', "ae", "oe", "ue"),
						$umlaute2 = array("Ä", "Ö", "Ü", "ä", "ö", "ü"),
					);
					array_replace($umlaute1, $umlaute2);
					*/
					
					//namen ändern (umlaute)
					$newphrase = $newphrase1;
					$search = array("Ae", "Oe", "Ue", "ae", "oe", "ue");
					$replace = array("Ä", "Ö", "Ü", "ä", "ö", "ü");
					$newphrase = str_replace($search, $replace, $newphrase);
					
					//$figcaption = string_replace();
					//$figcaption = string_replace();
					
					//ausgeben
					echo '<a target=bild href="' . $pathImages . $filename . '" data-lightbox="image-1">';
					echo '<img src="' . $pathThumbnails . $filename . '">';
					echo $newphrase . '<br>';
					echo '</a>';
					
					//loeschen
					echo '<form method="POST" action="delete.php">';
					echo '<input type="hidden" name="filename" value="' . $filename . '">';
					echo '<input type="submit" name="löschen" value="Löschen"><br><br>';
					echo '</form>';
				}
			}
			?>
		<script>
			lightbox.option({
				'resizeDuration': 200,
				'imageFadeDuration': 200,
				'wrapAround': true,
				'alwaysShowNavOnTouchDevices': true
			})
		</script>
		
		<script src="js/lightbox-plus-jquery.js"></script>
	</body>
</html>