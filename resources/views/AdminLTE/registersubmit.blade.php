<!doctype html>
<html>
    <head>
        <title>Admin LTE</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar-default navbar-fixed">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">Admin LTE</a>
                  
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     
                </div>
                 <a class="navbar-brand pull-right" href='{{URL::Route('register')}}'>BACK</a>
                
            </div>
        </nav>
        <?php $x=0;?>
        <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive">
             <table class="table">
                <tr>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Phone</th>
                    <th>Email</th>
                    
                    
                </tr>
                
                
                <tr>
            
            @foreach ($data as $value => $key) 
       
      
        <td>{{$key}}</td>
      
        @endforeach
        </tr>
       
            </table>
        </div>
        </div>
        <div class="container">
            <button type="button"><a class="navbar-brand " href='{{URL::Route('register')}}'>Continue</a></button>
        
        
        </div>
 </body>
</html>

