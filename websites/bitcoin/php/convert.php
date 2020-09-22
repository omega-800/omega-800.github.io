<?php
class Converter{
	public function Converter(){

	}
	public function convert($amount, $currency){
	    $url = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amount;
	    $json = file_get_contents($url);
	    $data = json_decode($json, true);
	    return $data;
	  }
}
  ?>