<?php
    include 'php/dbconnect.php';

    $houseSQL = "SELECT * FROM HOUSE";
    $houses = $conn->query($houseSQL);

    if($houses->num_rows > 0){
        while($row = $houses->fetch_assoc()){
            createHouse($row);
        }
    }

    function createHouse($house){
        echo '<div class = "housePhoto" onclick="window.location=\'housesite.php?id='.$house["HOUSE_ID"].'\';">
                <div class="house">
                <img class = "thumbnailH" src="images/'.$house["IMAGE"].' "alt="house">
                <table class="houseTable">
                    <tr>
                        <th>' .$house["NAME"]. ': '.$house["DESCRIPTION"].'</th>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>'.$house["ADDRESS"].'</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>'.$house["CITY"].'</td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>'.$house["STATE"].'</td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>'.$house["COUNTRY"].'</td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td>'.$house["POSTALCODE"].'</td>
                    </tr>
                </table>
                </div>';

        include 'php/dbconnect.php';
        $apartmentSQL = "SELECT * FROM APARTMENT";
        $apartments = $conn->query($apartmentSQL);

        if($apartments->num_rows > 0){
            while($row = $apartments->fetch_assoc()){
                if($row["HOUSE_ID"]==$house["HOUSE_ID"]){
                    echo'<div class="apartment">';
                    createApartment($row);
                    echo'</div>';
                }
            }
        }
        echo'</div>';
    }

    function createApartment($apartment){
        echo'<img class = "thumbnailA" src="images/'.$apartment["IMAGE"].' "alt="apartment">
                <table class="apartmentTable">
                    <tr>
                        <th>' .$apartment["NAME"]. ': '.$apartment["DESCRIPTION"].'</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>'.$apartment["PRICE"].'</td>
                    </tr>
                    <tr>
                        <td>Availability</td>
                        <td>';
                        if($apartment["AVAILABILITY"]==0){
                            echo'available';
                        }else{
                            echo'not available';
                        }
                        echo'</td>
                    </tr>
                </table>';
    }
?> 
