<html>
    <head>
        
    </head>
    <body>
        
        
        
        
        


 



<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>FileID</th>
            <th>FileName</th>
            <th>FileType</th>
            <th>FileSize</th>
            

        </tr>
    </thead>
    <tbody>
        @foreach($user as $value)
       
        <tr>
           
             <td>{{$value['FileID']}}</td>
             <td>{{$value['FileName']}}</td>
             <td>{{$value['FileType']}}</td>
             <td>{{$value['FileSize']}}</td>
            
        </tr> 
        @endforeach
        
    </tbody>

    <tfoot>
        <tr>
            <th>FileID</th>
            <th>FileName</th>
            <th>FileType</th>
            <th>FileSize</th>
            
        </tr>

    </tfoot>
</table>


    </body>
</html>