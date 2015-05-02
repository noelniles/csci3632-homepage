<div id="res"></div>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST["zipcode"])){
        if (($zipin = urlencode($_POST["zipcode"])) !== null) {
            $request = 'http://api.geonames.org/postalCodeSearch?postalcode=' . $zipin;
            $request = $request . '&country=us&username=scrawfordhpu';
            $response = file_get_contents($request);
            $html = "<p>$request</p><br><br>";

            $xml = simplexml_load_string($response);

            $html += $xml->totalResultsCount . ' entries found<br>';
            if ( $xml->totalResultsCount>0 ){
                $html += $_POST["zipcode"] . ' is ' . $xml->code->name .", ". $xml->code->adminName1;
            }
            return $html;
        }
    }
}
?>
