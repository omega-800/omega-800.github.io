<!DOCTYPE html>
<html lang="de">
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
			<h1>Lebenslauf</h1>
			<div class = "navthing-container">
	          <div class = "navthing" onclick="smoothScroll(document.getElementById('h2Schulen'))"><p>Schulen</p></div>
	          <div class = "navthing" onclick="smoothScroll(document.getElementById('h2Skills'))"><p>Skills</p></div>
	          <div class = "navthing" onclick="smoothScroll(document.getElementById('h2Familie'))"><p>Familie</p></div>
	          <div class = "navthing" onclick="smoothScroll(document.getElementById('h2Hobbies'))"><p>Hobbies</p></div>
	          <div class = "navthing" onclick="smoothScroll(document.getElementById('h2Referenzen'))"><p>Referenzen</p></div>
	        </div>

				<?php include ('php/topButton.php');?>
         <br>
			<section>
				<div class="about">
					<h3 id="asdfg">Guten Tag! <br>Ich bin Georgiy Shevoroshkin,</h3>
					<h4>ein motivierter Schüler und leidenschaftlicher Programmierer aus der IMS Hottingen. Auf dieser Webseite sind mein Lebenslauf, meine Attestate und Projekte zu sehen. Sie finden auch viele weitere Informationen über meine Freizeitbeschäftigungen, Interessen und Fakten über mich, die auf den Bewerbungsunterlagen nicht zu sehen sind.</h4>
				</div>
				<div id="first">
					<div class="box11">
					<img id="pic" src="content/profilepic/profilepic.jpg" alt="Profile picture"> 
					<button type="submit" 
					<?php 
					if($_SESSION['userID']['UserName'] == 'omega'){ 
				        echo"onclick=\"window.open('content/bewerbung/bewerbung.pdf')\"";
				    }else if($_SESSION['userID']['UserName'] == 'bluemouse'){ 
				        echo"onclick=\"window.open('content/bewerbung/Bewerbung_BlueMouse.pdf')\"";
				    }else if($_SESSION['userID']['UserName'] == 'cubera'){ 
				        echo"onclick=\"window.open('content/bewerbung/Bewerbung_Cubera.pdf')\"";
				    }else if($_SESSION['userID']['UserName'] == 'xiag'){ 
				        echo"onclick=\"window.open('content/bewerbung/Bewerbung_Xiag.pdf')\"";
				    }
					 ?> 
					id="dwnld">Lebenslauf PDF</button>
				</div>
				<div class="box12">	
					<h4>Über mich</h4>
					<table class="tb">			
						<tr>			
						<td class="leftside"><b>Geburtsdatum</b></td>			
						<td class="rightside">18.06.2002</td>			
						</tr>	
						<tr>			
						<td class="leftside"><b>Nationalität</b></td>			
						<td class="rightside">Schweiz, Russland, U.S.A.</td>			
						</tr>
						<tr>
						<td class="leftside"><b>Wohnort</b></td>			
						<td class="rightside">Stettbachstr. 129g</td>			
						</tr>			
						<tr>			
						<td class="leftside"><b>PLZ/Ort</b></td>			
						<td class="rightside">8051 Zürich</td>			
						</tr>				
					</table>	
					<h4>Kontakt</h4>	
					<table class="tb">			
						<tr>			
						<td class="leftside2"><b>Telefon</b></td>					
						<td class="rightside2">079 943 60 51</td>						
						</tr>
						<tr>
						<td class="leftside2"><b>Email</b></td>		
						<td class="rightside2">gshevoroshkin@gmail.com</td>					
						</tr>				
					</table>	
				</div>
			</div>
			</section>

			<section>
				<h2 id="h2Schulen">Besuchte Schulen</h2>
				<div id="second">
				<div class="box" id="school">
					<h4>Informatikmittelschule</h4>
					<p><b>Hottingen</b></p>
					<p>2017 - Heute</p>
					<button onclick="location.href='zertifikate.php'">Zeugnisse</button>
				</div>
				
				<div class="box" id="school">
					<h4>Sekundarschule</h4>
					<p><b>Herzogenmühle</b></p>
					<p>2016 - 2017</p>
					<button onclick="location.href='zertifikate.php'">Zeugnisse</button>
				</div>

				<div class="box" id="school">
					<h4>Gymnasium</h4>
					<p><b>Hohe Promenade</b></p>
					<p>2014 - 2016</p>
					<button onclick="location.href='zertifikate.php'">Zeugnisse</button>
				</div>
				
				<div class="box" id="school">
					<h4>Primarschule</h4>
					<p><b>Probstei</b></p>
					<p>2008 - 2014</p>
				</div>
				</div>
			</section>

			<section>
				<h2 id="h2Skills">Skills</h2>
				<div id="third">
				
				<div class="box" id="skills">
					<h4>Webentwicklung</h4>
					<div class="skills">
						<p class="skillstext">HTML</p>
						<div class="container">
							<div class="skills html">90%</div>
						</div>
						<p class="skillstext">CSS</p>
						<div class="container">
							<div class="skills css">85%</div>
						</div>
						<p class="skillstext">JAVASCRIPT</p>
						<div class="container">
							<div class="skills javascript">70%</div>
						</div>
						<p class="skillstext">PHP</p>
						<div class="container">
							<div class="skills php">45%</div>
						</div>
					</div>
				</div>
				
				<div class="box" id="skills">
					<h4>Applikationsentwicklung</h4>
					<div class="skills">
						<p class="skillstext">JAVA</p>
						<div class="container">
							<div class="skills java">90%</div>
						</div>
						<p class="skillstext">C#</p>
						<div class="container">
							<div class="skills csharp">75%</div>
						</div>
						<p class="skillstext">SQL</p>
						<div class="container">
							<div class="skills sql">60%</div>
						</div>
						<p class="skillstext">HASKELL</p>
						<div class="container">
							<div class="skills haskell">20%</div>
						</div>
					</div>
				</div>
				
				<div class="box" id="skills">
					<h4>Persönlich</h4>
					<div class="skills">
						<p class="skillstext">Einzelarbeit</p>
						<div class="container">
							<div class="skills one">100%</div>
						</div>
						<p class="skillstext">Teamwork</p>
						<div class="container">
							<div class="skills two">80%</div>
						</div>
						<p class="skillstext">Logisches Denken</p>
						<div class="container">
							<div class="skills three">100%</div>
						</div>
						<p class="skillstext">Kreativität</p>
						<div class="container">
							<div class="skills four">90%</div>
						</div>
					</div>
				</div>
				
				<div class="box" id="skills">
					<h4>Sprachen</h4>
					<div class="skills">
						<p class="skillstext">Deutsch</p>
						<div class="container">
							<div class="skills de">100%</div>
						</div>
						<p class="skillstext">Englisch</p>
						<div class="container">
							<div class="skills en">90%</div>
						</div>
						<p class="skillstext">Russisch</p>
						<div class="container">
							<div class="skills rus">90%</div>
						</div>
						<p class="skillstext">Französisch</p>
						<div class="container">
							<div class="skills fr">60%</div>
						</div>
					</div>
				</div>
				
				<div class="box" id="skills">
					<h4>Office</h4>
					<div class="skills">
						<p class="skillstext">Word</p>
						<div class="container">
							<div class="skills word">100%</div>
						</div>
						<p class="skillstext">Powerpoint</p>
						<div class="container">
							<div class="skills pp">100%</div>
						</div>
						<p class="skillstext">Excel</p>
						<div class="container">
							<div class="skills excel">75%</div>
						</div>
						<p class="skillstext">Access</p>
						<div class="container">
							<div class="skills access">50%</div>
						</div>
					</div>
				</div>
				</div>
			</section>

			<section>
				<h2 id="h2Familie">Familie</h2>
				<div id="fourth">
				
				<div class="box">
					<h4>Vater</h4>
					<table>		
						<tr>			
						<td><b>Name</b></td>			
						<td class="rightside">Alexey Shevoroshkin</td>			
						</tr>		
						<tr>			
						<td><b>Geburtsdatum</b></td>			
						<td class="rightside">08.05.1966</td>			
						</tr>
						<tr>			
						<td><b>Beruf</b></td>			
						<td class="rightside">Entwicklungsleiter UBS</td>			
						</tr>						
						<tr>			
						<td><b>Nationalität</b></td>			
						<td class="rightside">Schweiz, U.S.A.</td>			
						</tr>				
					</table>
				</div>
				
				<div class="box">
					<h4>Mutter</h4>
					<table>	
						<tr>			
						<td><b>Name</b></td>			
						<td class="rightside">Tatiana Chirokikh</td>			
						</tr>					
						<tr>			
						<td><b>Geburtsdatum</b></td>			
						<td class="rightside">14.04.1967</td>			
						</tr>
						<tr>			
						<td><b>Beruf</b></td>			
						<td class="rightside">Ernährungsberaterin</td>			
						</tr>						
						<tr>			
						<td><b>Nationalität</b></td>			
						<td class="rightside">Schweiz, Russland</td>			
						</tr>				
					</table>
				</div>
				
				<div class="box">
					<h4>Bruder</h4>
					<table>		
						<tr>			
						<td><b>Name</b></td>			
						<td class="rightside">Michail Shevoroshkin</td>			
						</tr>		
						<tr>			
						<td><b>Geburtsdatum</b></td>			
						<td class="rightside">22.11.2004</td>			
						</tr>
						<tr>			
						<td><b>Beruf</b></td>			
						<td class="rightside">Schüler, Sekundar</td>			
						</tr>			
					</table>
				</div>	
				
				<div class="box">
					<h4>Bruder</h4>
					<table>		
						<tr>			
						<td><b>Name</b></td>			
						<td class="rightside">Nikolay Shevoroshkin</td>			
						</tr>		
						<tr>			
						<td><b>Geburtsdatum</b></td>			
						<td class="rightside">05.08.2006</td>			
						</tr>
						<tr>			
						<td><b>Beruf</b></td>			
						<td class="rightside">Schüler, Gymnasium</td>			
						</tr>			
					</table>
				</div>	
				</div>
				
			</section>
			
			<section>
				<h2 id="h2Hobbies">Hobbies</h2>
				<div id="fifth">				
				<div class="box">
					<h4>Musik</h4>
					<p>Seit meinem 7. Lebensjahr ging ich in den Gitarrenunterricht. Musik spielte in meinem Leben andauernd eine sehr wichtige Rolle. Heutzutage besuche ich die Kurse zwar nicht mehr aber musiziere noch in einer kleinen Band, lerne Schlagzeug spielen und produziere für mich elektronische Musik oder HipHop Beats auf meinem PC.</p>
				</div>
				
				<div class="box">
					<h4>Kunst</h4>
					<p>Nicht nur durch Musik, sondern auch durch die Kunst kann ich meine Gefühle wiedergeben und mich stundenlang damit befassen. Sei es skizzieren auf Papier, malen auf der Leinwand, sprayen oder designen einer Webseite, ich verspüre dabei immer eine Euphorie, die mit keiner anderen Tätigkeit vergleichbar ist.</p>
				</div>	

				<div class="box">
					<h4>CEVI</h4>
					<p>Seit dem Jahr 2006 besuche ich regelmässig die CEVI Schwamendingen. Vor ungefähr 5 Jahren hatte ich meinen zweiten Abschluss als Gruppenleiter absolviert. Leider konnte ich in den letzten Jahren aufgrund der Schule und des Prüfungsstress nicht jeden Samstag dabei sein. Aber da ich mich mit Kindern gut verstehe und mir die Natur sehr wichtig ist, bin ich immer noch Teil unserer Gruppe.</p>
				</div>

				<div class="box">
					<h4>Sport</h4>
					<p>In meiner Freizeit bin ich nicht nur mit Kreativem beschäftigt, sondern treibe auch gern Sport. Dazu gehört Leichtathletik, Velofahren, Skateboarden und Tischtennis spielen. Vor allem gefällt es mir, im Wald joggen zu gehen und mit Freunden im Skatepark oder auf der Strasse Skateboard fahren und dabei neue Tricks versuchen zu meistern.</p>
				</div>
				</div>
				
			</section>
			
			<section>
				<h2 id="h2Referenzen">Referenzen</h2>
				<div id="fourth">
				<div class="box">
					<h4>Rene Probst</h4>
					<p>Lehrer BZZ</p>
					<table>	
						<tr>			
						<td><b>Telefon</b></td>			
						<td class="rightside">044 272 46 23</td>			
						</tr>						
						<tr>			
						<td><b>Email</b></td>			
						<td class="rightside">rene.probst@bzz.ch</td>			
						</tr>				
					</table>
				</div>
				
				<div class="box">
					<h4>Killer Markus</h4>
					<p>Lehrer Hottingen</p>
					<table>	
						<tr>				
						<td><b>Telefon</b></td>			
						<td class="rightside">062 892 35 74</td>			
						</tr>						
						<tr>			
						<td><b>Email</b></td>			
						<td class="rightside">markus.killer@ksh.ch</td>			
						</tr>				
					</table>
				</div>
				</div>				
			</section>
			</main>
			
			<footer>
				<?php include ('php/footer.php');?>
			</footer>
		</div>
	</body>
</html>
