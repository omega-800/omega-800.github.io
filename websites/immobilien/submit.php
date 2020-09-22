<!DOCTYPE html>
<html lang="de">
		<?php include ('content/head.php');?>
	<body>
	<div class= "wrapper">
		<header>
			<?php include ('content/header.php');?>
			<?php include ('content/navbar.php');?>
		</header>
		<main>
    			<?php
    			include 'php/dbconnect.php';
				$id=$_GET["id"];
				$apartmentSQL = "SELECT * FROM APARTMENT WHERE APARTMENT_ID = ".$id;
			    $apartments = $conn->query($apartmentSQL);

			    if($apartments->num_rows == 1){
        			while($row = $apartments->fetch_assoc()){
			        	echo'<article><p>Buy: '.$row["DESCRIPTION"].'</p></article>';
			        	echo'<p>Thanks, we\'ll inform you as soon as possible</p>';
			        }
				}
				?>
		</main>
		
		<footer>
			<?php include ('content/footer.php');?>
		</footer>
	</div>
	</body>
</html>