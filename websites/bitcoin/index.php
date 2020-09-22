
        <?php 
            require_once "php/createDatabase.php";
            $dbCreator = new Databasecreator();
            if($dbCreator->checkDB()){$dbCreator->createDB();}
             
$servername = "kulapuli.mysql.db.internal";
$username = "kulapuli_omega";
$password = "5ucc:N1664";
$dbname = "kulapuli_btc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM chf ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$dataPoints = array(
);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $date = new DateTime($row["time"]);
        $btcData = array("y" => $row["buy"], "label" => date_format($date, 'd/m g:i'));
        array_unshift($dataPoints, $btcData);
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="de">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <meta name="author" content="Georgiy Shevoroshkin" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/btc.svg">
    <title>BTC Kurse</title>
  </head>

  <body>
  	<header>
      <h1>Bitcoin</h1>
  	</header>
  	<main>
      <div class="sec">
        <h2>Visualisierung</h2>
        
        <div id="chartContainer" style="width: 100%; height: 500px"></div>

      </div>

      <div class="sec">
        <h2>Umrechner</h2>

        <?php
            require 'php/convert.php';
            $converter = new Converter();
          if(isset($GET['submit'])){

            $amount = $GET["value1"];
            $currency = $GET["currencies"];
            print_r($currency);
            $converted = $converter->convert($amount, $currency);

            echo $converted;
        }
        ?>

        <form method="get" onsubmit="return false;">
        <label for="value1">Bitcoins</label>
        <input type="number" step="0.0001" name="value1" id="val1" max="1000"><br>

        <select id="currencies" name="currencies">
          <option value="USD">USD</option>
          <option value="AUD">AUD</option>
          <option value="BRL">BRL</option>
          <option value="CAD">CAD</option>
          <option value="CHF">CHF</option>
          <option value="CLP">CLP</option>
          <option value="CNY">CNY</option>
          <option value="DKK">DKK</option>
          <option value="EUR">EUR</option>
          <option value="GBP">GBP</option>
          <option value="HKD">HKD</option>
          <option value="INR">INR</option>
          <option value="ISK">ISK</option>
          <option value="JPY">JPY</option>
          <option value="KRW">KRW</option>
          <option value="NZD">NZD</option>
          <option value="PLN">PLN</option>
          <option value="RUB">RUB</option>
          <option value="SEK">SEK</option>
          <option value="SGD">SGD</option>
          <option value="THB">THB</option>
          <option value="TWD">TWD</option>
        </select>
        <input type="submit" id="umrechnen" value="Umrechnen" name="umrechnen" />
      </form>
      </div>

      <div class="sec" id="second">
        <h2>Datenbank</h2>
        

        <form method="post"> 
          <input type="submit" id="speichern" value="Speichern" name="speichern" />
        </form>
        <div id="myProgress">
          <div id="myBar"></div>
        </div>

        <h3>Log:</h3>
        <object type="text/plain" data="log/log.txt" id="log"></object>
      </div>
<div id="id01"></div>
        <?php
        require "php/anotherSave.php";
        $finalsaver = new Savestuff;
       if(array_key_exists('speichern', $_POST)) { 
        global $finalsaver;
        $finalsaver->saveTheStuff();
    } 
?>
  	</main>

  <footer>
    <p>Author: Georgiy Shevoroshkin</p>
  </footer>

    <script>
      var element = document.getElementById("log");
element.scrollTo(0,element.offsetHeight);


    var div = document.getElementById('myProgress');
    var counter = 0;
    var waitSecs = 300;
    var save = document.getElementById('speichern');

    var i = 0;
    var refreshId = setInterval(function () {
     if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 3000);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        save.click();
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width + "%";
      }
    }
  }
    }, 1000);



window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  title: {
    text: "Kurs"
  },
  axisY: {
    title: "CHF pro 1 BTC",
    minimum:"9000"
  },
  data: [{
    type: "line",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
    </script>

  </body>

</html>