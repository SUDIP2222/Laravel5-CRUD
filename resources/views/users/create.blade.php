@extends('layouts.user')

@section('content')

    @if($errors->any())
      <ul class="alert alert-danger"> 
         @foreach($errors->all() as $error)
               <li>{{$error}}</li>
         @endforeach
    </ul>
  
     @endif

     <div class="well body-hight">

         {!! Form::open(['url'=>'table','class'=>'form-signup form-paddind']) !!}


         <div class="form-group">

             {!! Form::text('name',null,['class'=>'form-control from-width','placeholder'=>'name']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('email',null,['class'=>'form-control from-width','placeholder'=>'email']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('job',null,['class'=>'form-control from-width','placeholder'=>'job']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('salary',null,['class'=>'form-control from-width','placeholder'=>'salary']) !!}

         </div>

         <div class="form-group">

             {!! Form::submit('Create Data',['class'=>'btn btn-large btn-primary btn-block']) !!}

         </div>

         {!! Form::close() !!}



     </div>


@stop

