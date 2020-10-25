<?php

$url = "https://api.kawalcorona.com/";

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response, true); // print_r($result); echo "<br>";

$countryRegion = $result[18]['attributes']['Country_Region'];

$confirmed = $result[18]['attributes']['Confirmed']; 

$deaths = $result[18]['attributes']['Deaths'];

$recovered = $result[18]['attributes']['Recovered'];

$dateTimeString = $result[18]['attributes']['Last_Update'] / 1000; 

$lastUpdate = date("l, d F Y H:i:s", $dateTimeString);
$dateTimeString = $result[18]['attributes']['Last_Update'] / 1000; 

$lastUpdate = date("l, d F Y H:i:s", $dateTimeString);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Data Statistik Covid 19 Indonesia</title>
   <style type="text/css">
      dl{
         margin: auto;
         max-width: 400px;
      }
      dt{
         font-weight: bold;
      }

      img{
         border: 1px solid #000;
         max-width: 100px;
      }
   </style>
</head>
<body>
   <dl>
      <dt>Negara:</dt>
      <dd><?=$countryRegion?></dd>
      <dt>Flag:</dt>
      <dt>
         <img src="flag-indonesia.png" />
      </dt>
      <dt>Positif :</dt>
      <dd><?=$confirmed?></dd>
   </dl>

</body>
</html>
