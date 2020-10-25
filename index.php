

<?php

         $url = "https://api.kawalcorona.com/";

         $client = curl_init($url);

         curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

         $response = curl_exec($client);

         $result = json_decode($response, true); // print_r($result); echo "<br>";

         $countryRegion = $result[18]['attributes']['Country_Region'];

         $confirmed = $result[18]['attributes']['Confirmed']; 

         $deaths = $result[18]['attributes']['Deaths'];

         $recovered = $result[18]['attributes']['Recovered']

         
?>  
