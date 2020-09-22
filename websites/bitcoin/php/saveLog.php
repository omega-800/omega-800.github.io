<?php
require_once "checkDifference.php";
class Logsaver{
	public function Logsaver(){

	}

	public function appendLog($dataBTC){
		$diff= new CheckDifference;
		$difference= $diff->checkDiff($dataBTC);
		$logfile = 'log/log.txt';
		$current = file_get_contents($logfile);

		$current .= "\nLog: ".date("Y-m-d H:i:s").", BTC-Kurs zu 1 CHF: ".$dataBTC."\n";
		if($difference != 0){
		  $current .= "Der Kurs hat sich um ".$difference." verändert\n";
		  alert("Der Kurs hat sich um ".$difference." verändert");
		}else{
		  $current .= "Der Kurs hat sich kaum verändert\n";
		}
		file_put_contents($logfile, $current);
	}
}
?>