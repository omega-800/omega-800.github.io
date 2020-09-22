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
			        	echo'<article><p>Description: '.$row["DESCRIPTION"].'</p></article>';
			        	echo'<img class = "mainphoto" src="images/'.$row["IMAGE"].' "alt="apartment">
			        		 <table class="apartmentMainTable">
			                    <tr>
			                        <th>' .$row["NAME"]. ': '.$row["DESCRIPTION"].'</th>
			                    </tr>
			                    <tr>
			                        <td>Address</td>
			                        <td>'.$row["ADDRESS"].'</td>
			                    </tr>
			                    <tr>
			                        <td>City</td>
			                        <td>'.$row["CITY"].'</td>
			                    </tr>
			                    <tr>
			                        <td>State</td>
			                        <td>'.$row["STATE"].'</td>
			                    </tr>
			                    <tr>
			                        <td>Country</td>
			                        <td>'.$row["COUNTRY"].'</td>
			                    </tr>
			                    <tr>
			                        <td>Postal Code</td>
			                        <td>'.$row["POSTALCODE"].'</td>
			                    </tr>
			                    <tr>
					                <td>Availability</td>
			                        <td>';
					                if($row["AVAILABILITY"]==0){
					                  	echo'available';
					               	}else{
					              		echo'not available';
					                }
					                echo'</td>
					            </tr>
			                </table>
			                <form id="submitF" action="submit.php?id='.$row["APARTMENT_ID"].'" method="post">
			                	<input type="email" placeholder="email" name="email" required>
			                	<input type="tel" placeholder="tel" name="tel" required>
			                	<input type="submit" value="Buy" name="buy">
			                	</input>
			                </form>
			        	';
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