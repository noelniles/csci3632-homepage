<h2>Zip code finder...</h2>
<p class="lead">
Enter an address below and ge

</p>
<form class="form-inline well" action="inc/zip.php" name="zipcode" method="post">
<div class="row">
    <div class="form-group">
        <label for="zipin">Zip:</label>
        <input type="text" class="form-control" id="zipin" 
            placeholder="enter a zipcode" maxlength="30" width="100px"> 
    </div>
    <button type="submit" class="btn btn-default">lookup zipcode</button>
</div>
</form>
<div id="res"></div>
<script>
$('form[name=zipcode]').submit(function(){

    // Maybe show a loading indicator...

    $.post($(this).attr('action'), $(this).serialize(), function(res){
        // Do something with the response `res`
        $("#res").append(res);
        // Don't forget to hide the loading indicator!
    });

    return false; // prevent default action

});
</script>
