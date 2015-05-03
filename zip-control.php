<?php
$url = "https://maps.googleapis.com/maps/api/geocode/xml?address=";
$zipcode = null;
$apikey = 'AIzaSyAA1jB2iTaYTIAlKW3uNo5TTqHcyGOx9tc';
$results = [];

if(isset($_POST['zipcode'])){
  foreach ($_POST['zipcode'] as $zip) {
    $zipcode = urlencode($zip);
    $url .= $zipcode;
    $url .= '&key=' . $apikey;
    $xml = simplexml_load_file($url);

    $address = $xml->result->formatted_address;
    $address = explode(",", $address);
    array_push($results, "<address>$address[0]<br>$address[1]<br></address>");
  }
  foreach($results as $zip) {
    echo $zip;
  }
}
