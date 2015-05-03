<h2 class="page-header">Zipcode Lookup Tool</h2>
<blockquote id="zip-result"></blockquote>
<form id="zip-form" class="form-horizontal" method="POST" action="zip-control.php">

<div class="form-group">
    <label for="zipcode" class="col-sm-2 control-label">Zipcode</label>
    <div class="col-sm-10">
        <input type="text" name="zipcode[]" id="zipcode[]" class="form-control">
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
$('#zip-form').submit(function(event) {
  $.post('zip-control.php', $('#zip-form').serialize(), function(data) {
    $("#zip-result").html(data);
  });
  event.preventDefault();
});


$(function() {
    var inputDiv = $('#add-input');

    $('#add-input-btn').on('click', function() {
        $('<div class="form-group"><label for="zipcode"' 
            + 'class="col-sm-2 control-label">Zipcode</label>'
            + '<div class="col-sm-10"><input type="text" name="zipcode[]"' 
            + 'id="zipcode[]" class="form-control"></div></div>').appendTo(inputDiv);
    });
});
</script>
