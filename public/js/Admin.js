$(document).ready(function () {

    $("#city").keyup(function () {
        var City = $("#city").val();

        if (City == null || City == "")
        {
            $("#city").css({"color": "red", "border": "red solid 1px"});
            $("#citylocation").html("Please enter your City");

        } else
        {
            $("#city").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }
        
    });
    $("#state").keyup(function () {
        var State = $("#state").val();

        if (State == null || State == "")
        {
            $("#state").css({"color": "red", "border": "red solid 1px"});
            $("#statelocation").html("Please enter your State");

        } else
        {
            $("#state").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }
    });




    $("#textarea").keyup(function () {
        var Textarea = $("#textarea").val();

        if (Textarea == null || Textarea == "")
        {
            $("#textarea").css({"color": "red", "border": "red solid 1px"});
            $("#arealocation").html("Please enter your Current Address");

        } else
        {
            $("#textarea").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }
    });


    $("#fullname").keyup(function () {
        var FullName = $("#fullname").val();

        if (FullName == null || FullName == "")
        {
            $("#fullname").css({"color": "red", "border": "red solid 1px"});
            $("#namelocation").html("Please enter your First name");


        } else
        {
            $("#fullname").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }



    });

    $("#phone").keyup(function () {

        var Phone = $("#phone");


        if (Phone == null || Phone == "")
        {
            $("#phone").css({"color": "red", "border": "red solid 1px"});
            $("#phonelocation").html("Please enter your phone number");


        } else if (isNaN(Phone.val()))
        {
            $("#phone").css({"color": "red", "border": "red solid 1px"});
            $("#phonelocation").html("Not allowed characters in phone field");


        } else if (!(Phone.val().length == 10)) {


            $("#phone").css({"color": "red", "border": "red solid 1px"});
            $("#phonelocation").html("phone number in 10 digit");


        } else
        {
            var str;
            str = "(" + Phone.val().substr(0, 3) + ")" + Phone.val().substr(3, 3) + "-" + Phone.val().substr(6, 4);
            $("#phone").val(str);
            $("#phone").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }

    });
    
     $("#password").keyup(function () {
        var Password = $("#password").val();

        if (Password == null || Password == "")
        {
            $("#password").css({"color": "red", "border": "red solid 1px"});
            $("#passwordlocation").html("Please enter your Password");

        } else
        {
            $("#password").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }
        
    });



    $("#email").keyup(function () {

        var Email = $("#email");
        var EmailAt = Email.val().indexOf("@");
        var EmailDot = Email.val().indexOf(".");

        if (EmailAt == -1 || EmailDot == -1 || (EmailAt + 2) >= EmailDot)
        {

            $("#email").css({"color": "red", "border": "red solid 1px"});
            $("#emaillocation").html(" should be @,(.)after @, minimum 2 characters after(.), minimum 5 characters before @");

        } else
        {
            $("#email").css({"color": "blue", "border": "blue solid 1px"}).html("");

        }
    });
    
        $(".login").submit(function (event)
    {
        var Email = $("#email").val();
        var Phone = $("#phone").val();
       
        var len = $(this).val().length;
        if (Phone == null || Phone == "")
        {
            $("#phone").css({"color": "red", "border": "red solid 1px"});
            $("#phonelocation").html("Please enter your phone number");
            event.preventDefault();

        } else
        {
            $("#phonelocation").html("");

        }
          if (Email == null || Email == "")
        {
            $("#email").css({"color": "red", "border": "red solid 1px"});
            $("#emaillocation").html("Please enter your email address");
            event.preventDefault();

        }


    });
    
    
    
    
    

    $("#admin").submit(function (event)
    {
        var Email = $("#email").val();

        var Password = $("#password").val();
        var len = $(this).val().length;

        if (Password == null || Password == "")
        {
            $("#password").css({"color": "red", "border": "red solid 1px"});
            $("#passwordlocation").html("Please enter your Password");
            event.preventDefault();

        } else
        {
            $("#passwordlocation").html("");

        }
        
        
        if (Email == null || Email == "")
        {
            $("#email").css({"color": "red", "border": "red solid 1px"});
            $("#emaillocation").html("Please enter your email address");
            event.preventDefault();

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
            $("#fullname").css({"color": "red", "border": "red solid 1px"});
            $("#namelocation").html("Please enter your Full name");

            event.preventDefault();
        } else
        {
            $("#namelocation").html("");


        }

        if (City == null || City == "")
        {
            $("#city").css({"color": "red", "border": "red solid 1px"});
            $("#citylocation").html("");
            event.preventDefault();

        } else
        {
            $("#citylocation").html("");

        }
        if (State == null || State == "")
        {
            $("#state").css({"color": "red", "border": "red solid 1px"});
            $("#statelocation").html("Please enter your city");
            event.preventDefault();


        } else
        {
            $("#statelocation").html("");

        }


        if (Address == null || Address == "")
        {
            $("#textarea").css({"color": "red", "border": "red solid 1px"});
            $("#arealocation").html("Please enter your current address");
            event.preventDefault();

        } else
        {
            $("#arealocation").html("");



        }



    });
    



});



