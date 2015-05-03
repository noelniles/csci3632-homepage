<?php


/**
 * start
 *
 * The main function of this PHP script.
 */

function start()
{
    $bingMapsRoutesURL = 'http://dev.virtualearth.net/REST/v1/Imagery/Map/Road/Routes/Driving';
    $destination       = '';
    $requestURL        = '';
    $bingResponse      = '';
    $bingMap           = '';

    if (!empty($_POST))
        $destination = getDestinationFromPost();
    
    if ($destination) {
        $requestURL .= $bingMapsRoutesURL;

        if (buildRequestURL($destination, $requestURL)) {
            $bingMap = "<img src=\"$requestURL\">";

            print $bingMap;
            print '<p><b style="color:green;">A</b>: Fort Street Mall Honolulu, HI</p>';
            $destination = ltrim($destination, '+');
            $destination = rtrim($destination, '+');
            $destination = str_replace('+', ', ', $destination);
            print "<p><b style=\"color:red;\">B</b>: $destination</p>";
        }
    }
}


/**
 * getDestinationFromPost
 *
 * Attempts to pull data necessary for Bing Maps API request from the
 * $_POST array.
 *
 * @return string|Boolen The necessary (key => value pairs) data a Bing Maps
 * API request, or false if necessary data is not present in $_POST.
 */

function getDestinationFromPost()
{
    $destination         = '';
    $destinationElements = [
        'street'  => null,
        'city'    => null,
        'state'   => null,
        'zipcode' => null
    ];

    foreach (array_keys($destinationElements) as $destDatum) {
        if (!empty($_POST[$destDatum]))
            $destinationElements[$destDatum] = filter_input(INPUT_POST, $destDatum, FILTER_SANITIZE_STRING);
    }

    foreach ($destinationElements as $destDatum)
        $destination .= "$destDatum ";

    if ($destination === '') {
        $destination = null;
    }
    else
        $destination = urlencode(rtrim($destination));

    return $destination;
}


/**
 * buildRequestURL
 *
 * Uses $destination to create a request for a route from Bing Maps API.
 * If build was successful, $requestURL is set to the built request.
 *
 * @return Boolean True upon success, false otherwise.
 */

function buildRequestURL(&$destination, &$requestURL)
{
    $requestOpts = [
        'wayPoint.1=1138%20Fort%20Street%20Mall%20Honolulu%20HI',
        "wayPoint.2=$destination",
        'output=xml',
        'mapSize=500,500',
        'mapMetadata=0',
        'key=AsbCMS3M357N1tWzPh_04DgjqhiAWE1ODswVi5bRm0k9QjdWpknp0Ests8eG3fkC'
    ];

    $requestURL .= '?';
    foreach ($requestOpts as $requestData) {
        $requestURL .= $requestData;
        $requestURL .= '&';
    }
    
    $requestURL = rtrim($requestURL, '&');

    return true;
}


if (!empty($_REQUEST))
{
    start();
}
