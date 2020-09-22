<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Karten">
		<title>Karten</title>
	</head>
	<body>
		<h1>Karten</h1>
		<a href="Karten.php?phpvar=mischen">Mischen</a>
		<a href="Karten.php?phpvar=ordnen">Ordnen</a>
		
		<?php
		//variablen deklarieren
		$wasTun = $_GET['phpvar'];
		$pathImgs = "img/";
		
		//array erstellen
		$cards = array();
		$types = array('hearts', 'diamonds', 'spades', 'clubs',);
		$values = array(2, 3, 4, 5, 6, 7, 8, 9, 'a', 'j', 'q', 'k');
		
		foreach ($types as $type){
			foreach ($values as $value){
				$currentCard = $type . '_' . $value . '.png';
				$cards[] = $currentCard;
			}
		}	
		/*
		ksort($cards);
		//ausgeben
		foreach ($cards as $currentCard){
			echo '<img src="' . $pathImgs . $currentCard . '">';
		}	
		*/
		
		//unformatiert ausgeben
		//print_r ($cards);
		
		//mischen
		if ($wasTun == 'mischen'){
			shuffle($cards);
			foreach ($cards as $currentCard){
				echo '<img src="' . $pathImgs . $currentCard . '">';
			}	
		}
		//sortieren
		elseif ($wasTun == 'ordnen'){
			ksort($cards);
			foreach ($cards as $currentCard){
				echo '<img src="' . $pathImgs . $currentCard . '">';
			}	
		}
		
		?>

	</body>
</html>