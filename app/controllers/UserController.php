<?php

class UserController extends BaseController{

	public function display_user_profile($username){
		$userReference = User::where('username', '=', $username)->firstOrFail();
		Return View::make('user_profile')->with('user', $userReference);
	}

	public function display_signup_page(){
		Return View::make('signup_page');
	}

	public function create_user(){
		$newUser = new User;
		$newUser->username = Input::get('username');
		$newUser->email = Input::get('email');
		$newUser->password = Hash::make(Input::get('password'));
		$newUser->save();
	}

}