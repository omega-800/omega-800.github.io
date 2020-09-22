<?php
    class Databasecreator{

        public $bool=true;

        public function Databasecreator(){
        }

        public function checkDB(){
            global $bool;
            return $bool;
        }

        public function createDB(){
            global $bool;
            $servername = "kulapuli.mysql.db.internal";
$username = "kulapuli_omega";
$password = "5ucc:N1664";
$dbname = "kulapuli_btc";

$mysqli = new mysqli($servername, $username, $password, $dbname);

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $sql = "CREATE OR REPLACE DATABASE btc;";
            $mysqli->query($sql);

            $sql="USE btc;";
            $mysqli->query($sql);

            $url="https://blockchain.info/ticker";
            $json = file_get_contents($url);
            $data = json_decode($json, true);

            foreach ($data as $id=>$row) {
                $sql2 = "CREATE TABLE ".$id." (
                id serial,
                time timestamp,
                fifteen float,
                last float,
                buy float,
                sell float,
                symbol varchar(50),
                primary key(id)); ";

                $mysqli->query($sql2);
            }

            $sql3="CREATE TABLE BTC (
                id serial,
                time timestamp,
                value float,
                symbol varchar(50),
                primary key(id));";

            $mysqli->query($sql3);
            $bool=false;
        }
    }
?>