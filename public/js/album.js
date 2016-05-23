$(document).ready(
        function () {
            $('.album').load(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var search_term = $(this).val();



                $.ajax({
                    url: 'myalbum',
                    type: 'post',
                    data: {search_term: search_term},
                    success: function (data) {
                        $('.album').html(data);

                    }
                });

            });
        });