<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function display_homepage()
	{
		$firstUserReference = User::find(1);
		echo "Username: " . $firstUserReference->username;
		echo "<br />";
		echo "Latest message: " . $firstUserReference->messages()->get()->last()->message_body;
		$latestFollowerId = $firstUserReference->followers()->get()->last()->follower_user_id;
		echo "Latest follower: " . User::findOrFail($latestFollowerId)->username;
	}

}
