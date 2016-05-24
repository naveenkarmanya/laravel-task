$(document).ready(function () {
   
    $("#city").keyup(function () {
        var password = $("#city").val();

        if (password == null || password == "")
        {
            $("#citylocation,#city").css({"color":"red","border":"red solid 1px"}).html("Please enter your City");
            status = false;
        } else
        {
            $("#citylocation,#city").css({"color":"blue","border":"blue solid 1px"}).html("");
            status = true;
        }
       ;
    });
    $("#state").keyup(function () {
        var state = $("#state").val();

        if (state == null || state == "")
        {
            $("#statelocation,#state").css({"color":"red","border":"red solid 1px"}).html("Please enter your State");
            status = false;
        } else
        {
            $("#statelocation,#state").css({"color":"blue","border":"blue solid 1px"}).html("");
            status = true;
        }
    });


    

    $("#textarea").keyup(function () {
        var textarea = $("#textarea").val();

        if (textarea == null || textarea == "")
        {
            $("#arealocation,#textarea").css({"color":"red","border":"red solid 1px"}).html("Please enter your Current Address");
            status = false;
        } else
        {
            $("#arealocation,#textarea").css({"color":"blue","border":"blue solid 1px"}).html("");
            status = true;
        }
    });


    $("#fullname").keyup(function () {
        var fullname = $("#fullname").val();
        var status = false;
        if (fullname == null || fullname == "")
        {
            $("#namelocation,#fullname").css({"color":"red","border":"red solid 1px"}).html("Please enter your First name");

            status = false;
        } else
        {
            $("#namelocation,#fullname").css({"color":"blue","border":"blue solid 1px"}).html("");
            status = true;
        }



    });
    
     $("#phone").keyup(function () {

        var phone_num = $("#phone");
        status = false;

        if (phone_num == null || phone_num == "")
        {
            $("#phonelocation,#phone").css({"color":"red","border":"red solid 1px"}).html("Please enter your phone number");

            status = false;
        } else if (isNaN(phone_num.val()))
        {
            $("#phonelocation,#phone").css({"color":"red","border":"red solid 1px"}).html("Not allowed characters in phone field");


        } else if (!(phone_num.val().length == 10)) {


            $("#phonelocation,#phone").css({"color":"red","border":"red solid 1px"}).html("phone number in 10 digit & formate like ex:-(123)456-2345");


        }
        else
        {
            var str;
            str = "(" + phone_num.val().substr(0, 3) + ")" + phone_num.val().substr(3, 3) + "-" + phone_num.val().substr(6, 4);
            $("#phone").val(str);
            $("#phonelocation,#phone").css({"color":"blue","border":"blue solid 1px"}).html("");

        }

    });
    
    
    
      $("#email").keyup(function () {

        var email_v = $("#email");
        var email_at = email_v.val().indexOf("@");
        var email_dot = email_v.val().indexOf(".");
        var status = false;
        if (email_at == -1 || email_dot == -1 || (email_at + 2) >= email_dot)
        {

            $("#emaillocation,#email").css({"color":"red","border":"red solid 1px"}).html(" should be @,(.)after @, minimum 2 characters after(.), minimum 5 characters before @");

        } else
        {
            $("#emaillocation,#email").css({"color":"blue","border":"blue solid 1px"}).html("");
            status = true;
        }
    });

     $(".login").click(function (event)
    {
         var email = $("#email").val();
          var phone_n = $("#phone").val();
          var len = $(this).val().length;
          if (phone_n == null || phone_n == "")
        {
            $("#phonelocation,#phone").css({"color":"red","border":"red solid 1px"}).html("Please enter your phone number");
event.preventDefault();
            status = false;
        } else
        {
            $("#phonelocation").html("");
            status = true;
        }

        if (email == null || email == "")
        {
            $("#emaillocation,#email").css({"color":"red","border":"red solid 1px"}).html("Please enter your email address");
event.preventDefault();
            status = false;
        }
         
        
    });
    
    
    
    $(".register").click(function (event)
    {
         
        var FullName = $("#fullname").val();
       
        var City = $("#city").val();
        var State = $("#state").val();
       
        var Address = $("#textarea").val();
      
        var len = $(this).val().length;
     
        if (FullName == null || FullName == "")
        {
                $("#namelocation,#fullname").css({"color":"red","border":"red solid 1px"}).html("Please enter your Full name");

         event.preventDefault();
        } else
        {
            $("#namelocation").html("");
            
           
        }
        
        if (City == null || City == "")
        {
            $("#citylocation,#city").css({"color":"red","border":"red solid 1px"}).html("Please enter your city");
           event.preventDefault();
           
        } else
        {
            $("#citylocation").html("");
         
        }
        if (State == null || State == "")
        {
            $("#statelocation,#state").css({"color":"red","border":"red solid 1px"}).html("Retype your password same in above");
            event.preventDefault();
           
          
        } else
        {
            $("#statelocation").html("");
           
        }


        if (Address == null || Address == "")
        {
            $("#arealocation,#textarea").css({"color":"red","border":"red solid 1px"}).html("Please enter your current address");
event.preventDefault();
           
        }else
        {
            $("#arealocation").html("");
            
            
            
        }





    

    });

    
    
    
    

});