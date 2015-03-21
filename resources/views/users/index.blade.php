@extends('layouts.user')

@section('content')

<div class="well body-hight">

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Job</th>
                <th>Salary</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tables as $table)
            <tr>
                <td>{{ $table->name }}</td>
                <td>{{ $table->email }}</td>

                <td>{{ $table->job }}</td>
                <td>{{ $table->salary }}</td>

                <td><center><a href = "{{ URL::to('table/'.$table->id.'/edit') }}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a></center></td>
        <td><center><a href = "{{ action('TableController@delete', $table->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>      
        </tr>
        @endforeach

        </tbody>

     </table>
     <center>
        {!!$tables->render()!!}
     </center>
</div>

@stop