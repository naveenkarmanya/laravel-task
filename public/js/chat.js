$(document).ready(function () {

    $("#text").keydown(function (e) {

        if (e.which == '13') {

            var data = $("#text").val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/chatsubmit',
                type: 'post',
                data: {message: data, name: name},
                success: function (data) {
                    $("#text").val("");
                }
            });
        }
    });

    function getChat() {

        var word = null;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/getchat',
            type: 'post',
            data: {word: word},
            success: function (data) {

                $('.message').html(data);
            }
        });
    }



    setInterval(function () {
        getChat();
    }, 1000);
});