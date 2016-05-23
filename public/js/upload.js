$(document).ready(
        function () {
            $('#sel1').focusin(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var search_term = $(this).val();



                $.ajax({
                    url: '/user/upload',
                    type: 'post',
                    data: {search_term: search_term},
                    success: function (data) {
                        $('#sel1').html(data);

                    }
                });

            });
        });