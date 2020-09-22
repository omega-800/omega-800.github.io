<?php
        require_once "saveLog.php";
        require_once "saveData.php";
class Savestuff{

	public function Savestuff(){

	}
	
	public $datasaver;
	public $logsaver;

	function saveTheStuff(){
        $datasaver = new Datasaver;
	    $logsaver = new Logsaver;
	    $servername = "kulapuli.mysql.db.internal";
$username = "kulapuli_omega";
$password = "5ucc:N1664";
$dbname = "kulapuli_btc";

$mysqli = new mysqli($servername, $username, $password, $dbname);

          $url="https://blockchain.info/ticker";
          $json = file_get_contents($url);
          $data = json_decode($json, true);

          $urlBTC="https://blockchain.info/tobtc?currency=USD&value=1";
          $dataBTC = file_get_contents($urlBTC);

            $datasaver->saveToDB($data, $dataBTC); 
            $logsaver->appendLog($dataBTC);
            
      echo "<p>Daten wurden zuletzt gespeichert um: ".date("Y-m-d H:i:s")."</p>";
       }
}
?>