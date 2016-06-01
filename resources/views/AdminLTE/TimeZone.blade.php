
@extends('app')
@section('content')

 



<table id="timeZone" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>
            <th>VIEW</th>
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
            <td><button class="btn-success" id='view'>VIEW</button></td>
            <td><button class="btn-primary" id='edit'>EDIT</button></td>
            <td><button class="btn-danger" id='delete'>DELETE</button></td>
           
            
            
           

        </tr> 
        @endforeach




    </tbody>

    <tfoot>

        <tr>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
            
            

        </tr>

    </tfoot>
</table>

@stop























