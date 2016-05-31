

@extends('app')
@section('content')





<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>


        </tr>
    </thead>
    <tbody>
        @foreach($User as $value)



        <tr>
            <td><form id="form2" method="post" action="{{URL::Route('DeleteRows')}}"><input id="form2" type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></form></td>
            <td></td>
            <td><input form="form2" type='' name='Id' value='{{$value['Id']}}'></td>
            <td><input form="form2" type='text' name='Name' value='{{$value['Name']}}'</td>
            <td><input form="form2" type='text' name="Offset" value='{{$value['Offset']}}'</td>
            <td><input form="form2" type='submit' value='Delete'></td>




        </tr> 

        @endforeach

    </tbody>

    <tfoot>

        <tr>
            <th></th>
            <th></th>
            <th>Id</th>
            <th>TimeZone Name</th>
            <th>Offset</th>


        </tr>

    </tfoot>
</table>

@stop























