<?php

class UserController extends BaseController{

	public function display_user_profile($username){
		$userReference = User::where('username', '=', $username)->firstOrFail();
		Return View::make('user_profile')->with('user', $userReference);
	}

}