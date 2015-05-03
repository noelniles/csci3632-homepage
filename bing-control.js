$('#bing-form').submit(function(event) {
    $.post('bing-control.php', $('#bing-form').serialize(), function(data) {
        $('#bing-form').html(data);
    });
    event.preventDefault();
});
