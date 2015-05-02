<form class="form-horizontal" method="POST" action="pages/zip.php">

<div class="form-group">
    <label for="zipcode" class="col-sm-2 control-label">Zipcode</label>
    <div class="col-sm-10">
        <input type="text" name="zipcode" id="zipcode" class="form-control">
    </div>
</div>
<div id="add-input"></div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Lookup Address</button>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="button" id="add-input-btn" class="btn">+</button>
    </div>
</div>
</form>

<script>
$(function() {
    var inputDiv = $('#add-input');

    $('#add-input-btn').on('click', function() {
        $('<div class="form-group"><label for="zipcode" class="col-sm-2 control-label">Zipcode</label><div class="col-sm-10"><input type="text" name="zipcode" id="zipcode" class="form-control"></div></div>').appendTo(inputDiv);
    });
});
</script>

<?php
$url = "https://maps.googleapis.com/maps/api/geocode/xml?address=";
$address = $city = $state = $country = $zipcode = null;
$apikey = 'AIzaSyAA1jB2iTaYTIAlKW3uNo5TTqHcyGOx9tc';

if(isset($_POST['address'])){
    $address = urlencode($_POST['address']);
    $url .= $address . ','; 
}

if(isset($_POST['city'])){
    $city = urlencode($_POST['city']);
    $url .= $city . ',';
}

if(isset($_POST['state'])){
    $state = urlencode($_POST['state']);
    $url .= $state . ',';
}

if(isset($_POST['country'])){
    $country = urlencode($_POST['country']);
    $url .= $country . ',';
}

if(isset($_POST['zipcode'])){
    $zipcode = urlencode($_POST['zipcode']);
    $url .= $zipcode . ',';
}

$url .= '&key=' . $apikey;

echo $url;
$xml = simplexml_load_file($url);
if(!$xml) {
    echo "no xml";
} else {
    echo $xml->result->formatted_address;
}
?>





















