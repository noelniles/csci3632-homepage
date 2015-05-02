<?php

$method = 'POST';
$action = ROOT.'bing-control.php';

?>
<form class="form-horizontal" method="<?php print $method;?>" action="<?php print $action; ?>">

<div class="form-group">
    <label for="address"class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
        <input type="text" name="address" id="address" class="form-control">
    </div>
</div>
<div class="form-group">
    <label for="city" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
        <input type="text" name="city" id="city" class="form-control">
    </div>
</div>
<div class="form-group">
    <label for="state" class="col-sm-2 control-label">State</label>
    <div class="col-sm-10">
        <input type="text" name="state" id="state" class="form-control">
    </div>
</div>
<div class="form-group">
    <label for="country" class="col-sm-2 control-label">Country</label>
    <div class="col-sm-10">
        <input type="text" name="country" id="country" class="form-control">
    </div>
</div>
<div class="form-group">
    <label for="zipcode" class="col-sm-2 control-label">Zipcode</label>
    <div class="col-sm-10">
        <input type="text" name="zipcode" id="zipcode" class="form-control">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Lookup Address</button>
    </div>
</div>
</form>
<script src="<?php print JS.'bing.js';?>"></script>
