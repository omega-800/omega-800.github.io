<!DOCTYPE html>
<html lang="de" id="hhttmmll">
	<head>
		<?php include ('php/head.php');
		include ('php/checksession.php');?>	
	</head>
	 
	<body>
		<div class= "wrapper" id="main">
			<header>
				<?php include ('php/navbar.php');?>
			</header>
		
			<main>
				<h1>Projekte</h1>
					<div class = "navthing-container2">
						<div class = "navthing2" onclick="smoothScroll(document.getElementById('htmlh2'))"><p>HTML/CSS</p></div>
			          <div class = "navthing2" onclick="smoothScroll(document.getElementById('phph2'))"><p>PHP</p></div>
			          <div class = "navthing2" onclick="smoothScroll(document.getElementById('glassfishh2'))"><p>Glassfish</p></div>
			          <div class = "navthing2" onclick="smoothScroll(document.getElementById('ch2'))"><p>C#</p></div>
			          <div class = "navthing2" onclick="smoothScroll(document.getElementById('javah2'))"><p>Java</p></div>
			        </div>
				<?php include ('php/topButton.php');?>

				<h2 id="htmlh2">HTML/CSS</h2>

				<div class="box projektBox">
					<div class="text">Jukebox</div>
					<p>Während der Projektwoche hatten wir den Auftrag, einen Musikplayer zu programmieren, der wie eine Jukebox aussieht. In dieser Arbeit habe ich das Design der Webseite übernommen. Das back-end haben zwei Kollegen aus meiner Gruppe übernommen.</p>
					 <img onclick="location.href='websites/jukebox/index.html';" class="projectPicture" src="content/projekte/html_jukebox.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Russtreff</div>
					<p>Für meine Mutter habe ich eine Website erarbeitet, auf der Informationen zu verschiedensten ihrer russichen Veranstaltungen zu sehen sind.</p>
					 <img onclick="location.href='websites/russisch/index.html';" class="projectPicture" src="content/projekte/html_rus.png"> 
				</div>

				<div class="box projektBox" >
					<div class="text">Immobilien</div>
					<p>Diese Website hatte ich für meinen Vater geschrieben, der in seiner Freizeit sich mit Immobilien beschäftigt. Das Ziel war es, eine einfach zu verstehende Seite für den weiterverkauf dieser Häuser zu erstellen. Leider konnte ich seit einer Zeit daran nicht weiterarbeiten, da mein Fokus zurzeit auf der Schule liegt.</p>
					 <img onclick="location.href='websites/immobilien/index.php';" class="projectPicture" src="content/projekte/html_dad.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Hotel</div>
					<p>Im HTML ÜK hatten wir in der Schule begonnen, mit HTML und CSS zu arbeiten. Das ist eine meiner ersten Kreationen während dieser Zeit. Drauf zu sehen sind Veranstaltungen und Informationen zum Hotel Vallora.</p>
					 <img onclick="location.href='websites/hotel/hotel_vallora.html';" class="projectPicture" src="content/projekte/html_vallora.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Drugpedia</div>
					<p>Dies war eine meiner ersten komplett selbst geschriebenen Websiten, die im selben ÜK entstanden ist. Sie dient zur Aufklärung von den am weitesten verbreiteten Substanzen und ihren Risiken.</p>
					 <img onclick="location.href='websites/drugpedia/index.html';" class="projectPicture" src="content/projekte/html_drugpedia.png"> 
				</div>

				<h2 id="phph2">PHP</h2>
				<div class="box projektBox">
					<div class="text">Formulare</div>
					<p>Hier zu sehen ist meine allererste mit PHP geschriebene Website. Nachdem man auf "Senden" klickt, werden die Felder überprüft und die leeren rot angezeigt. Dazu wird die Email nach dem Syntax (mithilfe von RegEx) geprüft. Falls alles stimmt, werden die Informationen weitergeleitet.</p>
					 <img onclick="location.href='websites/bestellung_php/Bestellung.php';" class="projectPicture" src="content/projekte/php_formulare.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Galerie</div>
					<p>Die Galerie war mein zweites Projekt mit PHP. Man kann seine eigenen Bilder auf diese Webapplikation hochladen, in einem Slideshow anschauen und auch wieder Löschen.</p>
					 <img onclick="location.href='websites/galerie_php/gallery_scandir.php';" class="projectPicture" src="content/projekte/php_galerie.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Karten</div>
					<p>Weitere kleine Applikationen wie zum Beispiel eine Seite für das ordnen und mischen der Spielkarten hatte ich zur Zeit des ÜKs oft implementiert.</p>
					 <img onclick="location.href='websites/karten_php/Karten.php';" class="projectPicture" src="content/projekte/php_karten.png"> 
				</div>

				<h2 id="glassfishh2">Glassfish</h2>
				<div class="box projektBox">
					<div class="text">Bring your own device</div>
					<p>Bei diesen Projekten lag der Fokus auf dem back-end development. Wir haben mit Java und JavaScript gearbeitet, um Webapplikationen zu programmieren, auf denen die Benutzer nur dann auf ihre Informationen zugreifen können, sobald sie angemeldet sind.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/glassfish_byod.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Bücher</div>
					<p>Hier gibt eine Bücherliste und mehrere User mit verschiedenen Rechten. Die User, die Adminrechte haben, können die Bücher bearbeiten, löschen und hinzufügen. Die anderen User können sie nur anschauen. Bei dieser Webseite setzten wir zum ersten Mal Cookies ein.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/glassfish_books.png"> 
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/glassfish_books2.png"> 
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/glassfish_books3.png"> 
				</div>

				<h2 id="ch2">C#</h2>
				<div class="box projektBox">
					<div class="text">Rakete</div>
					<p>Dieses Spiel, in dem man eine Rakete steuert und versucht den Meteoriten auszuweichen, war mein erstes grösseres Projekt und auch eine Einführung in Unity und die Sprache C#.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/cSharp_rocket.png"> 
					
				</div>

				<div class="box projektBox">
					<div class="text">Dungeon</div>
					<p>Als das Raketenspiel fertiggeschrieben war, hatte ich ein 2D Rogue Spiel angefangen zu schreiben, doch konnte es leider aus Zeitgründen nicht zu Ende programmieren.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/cSharp_dungeon.png"> 
				</div>

				<h2 id="javah2">Java</h2>
				<div class="box projektBox">
					<div class="text">UNO</div>
					<p>Wir haben als Projekt im 4. Semester der IMS ein UNO mit Swing erstellt. Es gibt vier Spieler, die man am Anfang des Spiels benennen kann. Auch existiert die Option, gegen einen PC zu spielen.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/java_uno.png"> 
				</div>

				<div class="box projektBox">
					<div class="text">Swing</div>
					<p>Vor dem UNO Projekt habe ich in der Schule, wie auch in der Freizeit einige Applikationen mithilfe von Swing programmiert. Hier ist zum Beispiel ein Notenrechner zu sehen.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/java_swing.png"> 
					
				</div>

				<div class="box projektBox">
					<div class="text">Sortierung, Konvertierung</div>
					<p>Mit Java hatten wir viele kleinere Aufgaben, wie zum Beispiel einige der Sortieralgorythmen oder Konvertierung zu implementieren.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/java_sort.png"> 
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/java_konverter.png"> 
					
				</div>

				<div class="box projektBox">
					<div class="text">Weiteres</div>
					<p>Natürlich hatten wir sehr viele weitere kleine Java-Programme geschrieben. Hier ist eine Bücherverwaltungsanwendung für die Bibliothek zu sehen.</p>
					 <img onclick="openModal(this)" class="projectPicture" src="content/projekte/java_klassen.png"> 
					
				</div>

				<div id="modal01" class="modal">
	            <div class="modal-content">
	            <div class="modal-header">
	            <span class="close" id="close">&times;</span>
	            </div>
	            <div class="modal-body">
	            	<img id="img01">
	            </div>
	            </div>
	        </div>

			</main>
			<footer>
				<?php include ('php/footer.php');?>
			</footer>
			<script>

		        var modal = document.getElementById("modal01");

		        function openModal(element) {
				  document.getElementById("img01").src = element.src;
				  modal.style.display = "block";
         		 document.getElementById("hhttmmll").style.overflow = "hidden";
				}
				
				var close=document.getElementById("close");
				close.onclick=function(){
				  modal.style.display = "none";
          			document.getElementById("hhttmmll").style.overflow = "initial";
				}

				window.onclick = function(event) {
					if(event.target == modal){
				  modal.style.display = "none";
          			document.getElementById("hhttmmll").style.overflow = "initial";

					}
		        }
			</script>
		</div>
	</body>
</html>
