$(function () {
    $('#google_parse').click(function (e) {
        e.preventDefault();
        $.ajax({
            beforeSend: function () {
                $("#pusto").html("<img src  ='loader.gif' />")
            },
            success: function (data) {
                $('#pusto').html(data);
            },
            error: function () {
            },
            url: 'ajax_google_parse.php',
        });

    });
});

