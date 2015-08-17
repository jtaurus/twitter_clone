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
							<h2 class="text-center"><a href="{{route('user_profile', $data["user"]->username)}}">{{$data["user"]->username}}</a></h2>
							<div class="text-left">Member since: {{$data["user"]->created_at}}</div>
							<div class="text-left">Messages: {{$data["user"]->messages()->count()}}</div>
							<div class="text-left">Followers: {{$data["user"]->followers()->count()}}</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Recent activity</h2>
							@if(isset($data["follows"]))
							<h3 class="text-left">Started following:</h3>
							@foreach($data["follows"] as $oneFollowed)
							<li>
							<a href="{{route('user_profile', $oneFollowed->username)}}">{{$oneFollowed->username}}</a>
							</li>
							@endforeach
							@endif
							@if(isset($data["followers"]))
							<h3 class="text-left">Followed by:</h3>
							@foreach($data["followers"] as $oneFollower)
							<li>
							<a href="{{route('user_profile', $oneFollower->username)}}">{{$oneFollower->username}}</a>
							</li>
							@endforeach
							@endif
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="row">
						@include('partials.message_posting_form')
						User messages:
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