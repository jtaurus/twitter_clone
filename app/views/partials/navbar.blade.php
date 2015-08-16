			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="{{route('homepage')}}">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						@if(Auth::check())
						<li class="inactive">
							<a href="{{route('user_profile', Auth::user()->username)}}">Your profile</a>
						</li>
						@endif
					</ul>
					@if(!Auth::check())
							{{Form::open(array('url' => route('login_post'), "class" => "navbar-form navbar-left"));}}
							<div class="form-group">
							{{Form::label('username', 'Username');}}
							{{Form::text('username', 'username', array('class' => 'form-control'));}}
							</div>
							<div class="form-group">
							{{Form::label('password', 'Password');}}
							{{Form::password('password', array('class' => 'form-control'));}}
							</div>
							{{Form::submit('Submit', array('class' => 'btn btn-default'));}}
						{{Form::close();}}
					@endif
					<ul class="nav navbar-nav navbar-right">
						<li>
							@if(!Auth::check())
							<a href="{{route('signup_page')}}">Sign up</a>
							@endif
							@if(Auth::check())
							<a href="{{route('logout')}}">Logout</a>
							@endif
						</li>
					</ul>
				
			</nav>

