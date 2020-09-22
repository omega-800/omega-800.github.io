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
				$houseSQL = "SELECT * FROM HOUSE WHERE HOUSE_ID = ".$id;
			    $houses = $conn->query($houseSQL);

			    if($houses->num_rows == 1){
        			while($row = $houses->fetch_assoc()){
			        	echo'<article><p>Description: '.$row["DESCRIPTION"].'</p></article>';
			        	echo'<img class = "mainphoto" src="images/'.$row["IMAGE"].' "alt="house">
			        		 <table class="houseMainTable">
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
			                </table>


			        	';
			        }

			        $apartmentSQL = "SELECT * FROM APARTMENT";
			        $apartments = $conn->query($apartmentSQL);

			        if($apartments->num_rows > 0){
			            while($row = $apartments->fetch_assoc()){
			                if($row["HOUSE_ID"]==$id){
						        echo'<div class="mainArticle" onclick="window.location=\'apartmentsite.php?id='.$row["APARTMENT_ID"].'\';"><img class = "thumbnailMainA" src="images/'.$row["IMAGE"].' "alt="apartment">
					                <table class="apartmentT">
					                    <tr>
					                        <th>' .$row["NAME"]. ': '.$row["DESCRIPTION"].'</th>
					                    </tr>
					                    <tr>
					                        <td>Price</td>
					                        <td>'.$row["PRICE"].'</td>
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
					                </div>';

			                }
			            }
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