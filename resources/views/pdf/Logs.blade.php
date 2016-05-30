<html>
    <head>
        
    </head>
    <body>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>Id</th>
            <th>UserName</th>
            <th>BrowserDetails</th>
            <th>IPAddress</th>
            <th>TimeStamp</th>
            <th>BrowserName</th>
            <th>BrowserPlateform</th>
            <th>BrowserVersion</th>
            <th>BrowserPattern</th>
            

        </tr>
    </thead>
    <tbody>
        @foreach($user as $value)
       
        <tr>
           <td>{{$value['Id']}}</td>
             <td>{{$value['UserName']}}</td>
             <td>{{$value['BrowserDetails']}}</td>
             <td>{{$value['IPAddress']}}</td>
             <td>{{$value['TimeStamp']}}</td>
             <td>{{$value['BrowserName']}}</td>
             <td>{{$value['BrowserPlateform']}}</td>
             <td>{{$value['BrowserVersion']}}</td>
             <td>{{$value['BrowserPattern']}}</td>
            
        </tr> 
        @endforeach
        
    </tbody>

    <tfoot>
        <tr>
            <th>Id</th>
            <th>UserName</th>
            <th>BrowserDetails</th>
            <th>IPAddress</th>
            <th>TimeStamp</th>
            <th>BrowserName</th>
            <th>BrowserPlateform</th>
            <th>BrowserVersion</th>
            <th>BrowserPattern</th>
            
        </tr>

    </tfoot>
</table>


























    </body>
</html>