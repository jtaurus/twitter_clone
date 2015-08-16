@extends('master.main_layout')
@section('title')
Viewing profile: {{$data["user"]->username}}
@stop
@section('content')
Viewing profile of user: {{$data["user"]->username}}
@foreach($data["messages"] as $oneMessage)
	<p>{{$oneMessage->message_body}}</p><br />
@endforeach
@stop