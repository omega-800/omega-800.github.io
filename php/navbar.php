<?php
echo '<div class = "sidenav" id = "mySidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<h3 id="navtext">Verzeichnis</h3>
	<a class="navLink" href="index.php">Home</a>
	<a class="navLink" href="zertifikate.php">Zertifikate</a>
	<a class="navLink" href="projekte.php">Projekte</a>
	<a class="navLink" href="kunst.php">Kunst</a>
	<h3 id="navtext">Kontakt</h3>
	<a class="navLink" href="tel:079 943 60 51">079 943 60 51</a>
	<a class="navLink" href="mailto:gshevoroshkin@gmail.com">Email</a>
	<h3 id="navtext">Eingeloggt als:<br><i>'.$_SESSION['userID']['UserName'].'</i></h3>
	<a class="navLink" href="php/logout.php">Logout</a>
</div>
<span id="navburger" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
	if(window.screen.width >= 600){
  document.getElementById("navburger").style.visibility = "hidden";
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}else{

  document.getElementById("mySidenav").style.width = "100vw";
}
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("navburger").style.visibility = "visible";
}
</script>';
?>