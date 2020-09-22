<?php
class CheckDifference{
	public function CheckDifference(){

	}
	public function checkDiff($dataBTC){
		$servername = "kulapuli.mysql.db.internal";
$username = "kulapuli_omega";
$password = "5ucc:N1664";
$dbname = "kulapuli_btc";

$mysqli = new mysqli($servername, $username, $password, $dbname);
        $stmt = $mysqli->query("SELECT value, id FROM btc ORDER BY id DESC LIMIT 1");

        while ($row = $stmt->fetch_assoc()) {
            $oldBTC = $row['value'];
            if(($oldBTC - $dataBTC > 0.00001)||($dataBTC - $oldBTC > 0.00001)){
                return $oldBTC - $dataBTC;
            }else{
                return 0;
            }
        }
    }
}
?>