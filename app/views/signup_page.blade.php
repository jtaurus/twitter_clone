@extends('master.main_layout')
@section('title')
Sign up
@stop

@section('content')
<center>Create a new account</center>
@if(isset($message))
<center><h4>{{$message}}</h4></center>
@endif
<div class="col-md-4">
</div>
<div class="col-md-4">
{{Form::open();}}
<div class="form-group">
{{Form::label('username', 'Username');}}
{{Form::text('username', 'username', array('class' => 'form-control'));}}
</div>
<div class="form-group">
{{Form::label('email', 'E-mail')}}
{{Form::text('email', 'email', array('class' => 'form-control', 'type' => 'email', 'placeholder' => 'email'));}}
</div>
<div class="form-group">
{{Form::label('password', 'Password');}}
{{Form::password('password', array('class' => 'form-control'));}}
</div>
<br />
{{Form::submit('Submit', array('class' => 'btn btn-default'));}}
{{Form::close();}}
</div>
<div class="col-md-4">
</div>
@stop