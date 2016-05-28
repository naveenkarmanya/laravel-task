
@extends('app')
@section('content')




<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>TimeZone Name</th>
            <th>offset</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody>
       @foreach($tzlist as $value)
    @foreach($value as $values)

        <tr>
            <td>{{$User['timezone_id']}}</td>
            <td>{{$User['offset']}}</td>
           

        </tr> 
        @endforeach
@endforeach  



    </tbody>

    <tfoot>

        <tr>
            <th>TimeZone Name</th>
            <th>offset</th>
            <th></th>
            <th></th>

        </tr>

    </tfoot>
</table>

@stop























