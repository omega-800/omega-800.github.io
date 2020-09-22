<?php
class Datasaver{
    public function Datasaver(){
    }

    public function saveToDB($data, $dataBTC){
        $servername = "kulapuli.mysql.db.internal";
$username = "kulapuli_omega";
$password = "5ucc:N1664";
$dbname = "kulapuli_btc";

$mysqli = new mysqli($servername, $username, $password, $dbname);
        foreach ($data as $id=>$row) {
            $sql = "INSERT INTO ".$id." (fifteen, last, buy, sell, symbol, time) VALUES (".$data[$id]['15m'].", ".$data[$id]['last'].", ".$data[$id]['buy'].", ".$data[$id]['sell'].", '".$data[$id]['symbol']."', date('Y-m-d H:i:s')); ";
            $mysqli->query($sql);
        }

        $sql2 = "INSERT INTO btc (value, symbol, time) VALUES (".$dataBTC.", 'BTC', date('Y-m-d H:i:s'));";
        $mysqli->query($sql2);
    }
}
?>