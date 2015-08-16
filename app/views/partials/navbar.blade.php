			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="{{route('homepage')}}">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">{{$user->username}}</a>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<label for="emailfield">Email address:</label>
							<input class="form-control" type="text" id="emailfield">
							<label for="passwordfield">Password:</label>
							<input class="form-control" type="password" id="passwordfield">
						</div> 
						<button type="submit" class="btn btn-default">
							Log-in
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Sign up</a>
						</li>
					</ul>
				</div>
				
			</nav>