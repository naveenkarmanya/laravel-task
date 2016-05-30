
<html>
    <head>
        
    </head>
    <body>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th>
            <th>Created</th>
            
            

        </tr>
    </thead>
    <tbody>
        @foreach($user as $value)
       
        <tr>
           <td>{{$value['Id']}}</td>
             <td>{{$value['Name']}}</td>
             <td>{{$value['Offset']}}</td>
            
             <td>{{$value['Created']}}</td>
             
            
        </tr> 
        @endforeach
        
    </tbody>

    <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Offset</th>
            <th>Created</th>
            
        </tr>

    </tfoot>
</table>


























    </body>
</html>