

@extends('app')
@section('content')

       
       
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="table-responsive">
                    <table class="table " >
                        <tr>
                            <th>Id</th>
                            <th>UserName</th>
                            <th>Browser Details</th>
                            <th>IP Address</th>
                            <th>Time Stamp</th>
                            <th>Browser Name</th>
                            <th>Browser Platform</th>
                            <th>Browser Version</th>
                            <th>Browser Pattern</th>
                            <th>Resulutions</th>
                            <th></th>
                            <th></th>


                        </tr>
                        
                        @foreach($Userss as $values)
                        <tr>
                            @foreach($values as $value=>$key)
                            <td>{{$key}}</td>
                            
                            
                           
                            @endforeach
                           
                           </td>
                           
                        </tr>
                        @endforeach
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        
                        
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
 @stop


