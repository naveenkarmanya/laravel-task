$(document).ready(
        function () {
            $('#total').focusin(function (e) {
                
                
                var quantity =$('#Quantity').val();
                var price=$('#price').val();
              var x=  (quantity*price);
              $('#total').val(x);
            



            }); 
        });