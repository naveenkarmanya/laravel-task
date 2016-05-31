@extends('app')
@section('content')




<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>FileD</th>
            <th>FileName</th>
            <th>FileType</th>
            <th>FileSize</th>

        </tr>
    </thead>
    <tbody>
        @foreach($upload as $file)

        <tr>
    <input type='text' id='first' value=''>
            <td>{{$file['FileName']}}</td>
            <td>{{$file['FileType']}}</td>
            <td>{{$file['FileSize']}}</td>

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

@stop






















