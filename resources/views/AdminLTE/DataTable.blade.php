@extends('app')
@section('content')

<!--<script>
    Data="<? php print_r($upload) ?>";
    </script>-->


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">




    <thead>
        <tr>
            <th>FileID</th>
            <th>FileName</th>
            <th>FileType</th>
            <th>FileSize</th>

        </tr>
    </thead>
    <tbody>
        @foreach($upload as $file)

        <tr>
            <td>{{$file['FileID']}}</td>
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






















