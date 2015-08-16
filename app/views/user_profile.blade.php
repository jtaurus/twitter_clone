@extends('master.main_layout')
@section('title')
Viewing profile: {{$data["user"]->username}}
@stop
@section('content')
Viewing profile of user: {{$data["user"]->username}}
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		@include('partials.navbar')
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							User Details:
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							Recent followings:
						</div>
					</div>
				</div>
				<div class="col-md-9">
					User messages:
					<div class="row">
						<div class="col-md-12">
							One message
						</div>
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