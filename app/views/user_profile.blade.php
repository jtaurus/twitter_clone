@extends('master.main_layout')
@section('title')
Viewing profile: {{$data["user"]->username}}
@stop
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		@include('partials.navbar')
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">{{$data["user"]->username}}</h2>
							<div class="text-left">Member since: {{$data["user"]->created_at}}</div>
							<div class="text-left">Messages: {{$data["user"]->messages()->count()}}</div>
							<div class="text-left">Followers: {{$data["user"]->followers()->count()}}</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Recent activity</h2>
							<h3 class="text-left">Followed</h3>
							<h3 class="text-left">Started following</h3>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					User messages:
					
					<div class="row">
						@foreach($data["messages"] as $oneMessage)
						<div class="col-md-12">
							<div class="text-right">Posted on: {{$oneMessage->created_at}}</div>
							<h3 class="text-center">{{$oneMessage->message_body}}</h3>
						</div>
						@endforeach
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					The footer
				</div>
			</div>
		</div>
	</div>
</div>
@stop