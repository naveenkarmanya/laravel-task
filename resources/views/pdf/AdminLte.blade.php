
<html>
    <head>
        
    </head>
    <body>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Phone</th>
            <th>email</th><br>
            <th>Password</th>
            <th>AccountNumber</th>
            

        </tr>
    </thead>
    <tbody>
        @foreach($user as $value)
       
        <tr>
           <td>{{$value['ID']}}</td>
             <td>{{$value['FullName']}}</td>
             <td>{{$value['Address']}}</td>
            
             <td>{{$value['City']}}</td>
             <td>{{$value['State']}}</td>
             <td>{{$value['Phone']}}</td>
             <td>{{$value['email']}}</td><br>
             <td>{{$value['Password']}}</td>
              <td>{{$value['AccountNumber']}}</td>
            
        </tr> 
        @endforeach
        
    </tbody>

    <tfoot>
        <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Phone</th>
            <th>email</th><br>
            <th>Password</th>
            <th>AccountNumber</th>
            
        </tr>

    </tfoot>
</table>








    </body>
</html>