<?php 

if (isset($_POST["zipcode"])){
  if (($zipin = urlencode($_POST["zipcode"])) !== null) {
    $request = 'http://api.geonames.org/postalCodeSearch?postalcode=' . $zipin;
    $request = $request . '&country=us&username=scrawfordhpu';
    $response = file_get_contents($request);
    echo $request .'<br><br>';

    $xml = simplexml_load_string($response);
    echo $xml->totalResultsCount . ' entries found<br>';
    if ( $xml->totalResultsCount>0 ){
      echo $_POST["zipcode"] . ' is ' . $xml->code->name .", ". $xml->code->adminName1;
    }
  }
}
