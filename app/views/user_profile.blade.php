@extends('master.main_layout')
@section('title')
Viewing profile: {{$data["user"]->username}}
@stop
{{$data["user"]->username}}