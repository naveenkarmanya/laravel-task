
@extends('app')
@section('content')

 



<table id="timeZone" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>
            <th>EDIT</th>
            <th>DELETE</th>
           

        </tr>
    </thead>
    <tbody>
       @foreach($User as $value)
   
 

        <tr>
           
             <td>{{$value['Id']}}</td>
            <td>{{$value['Name']}}</td>
            <td>{{$value['Offset']}}</td>
            <td><a id='edit'>EDIT</a></td>
            <td><a id='delete'>DELETE</a></td>
            
            
            
           

        </tr> 
        @endforeach




    </tbody>

    <tfoot>

        <tr>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>
            <th>EDIT</th>
            <th>DELETE</th>
            

        </tr>

    </tfoot>
</table>

@stop























