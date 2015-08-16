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
		$validatorRules = array('username' => 'required|unique:users', 'email' => 'required|email|unique:users', 'password' => 'required');
		$validatorInstance = Validator::make(Input::all(), $validatorRules);
		if($validatorInstance->passes()){
			$newUser = new User;
			$newUser->username = Input::get('username');
			$newUser->email = Input::get('email');
			$newUser->password = Hash::make(Input::get('password'));
			$newUser->save();
			Return Redirect::route('homepage');
		}
		else{
			Return View::make('signup_page')->with('message', 'Please provide valid data.');
		}
	}

	public function display_login_page(){
		Return View::make('login_page');
	}

	public function log_in(){
		if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
			Return Redirect::route('user_profile', Auth::user()->username);
		}
		else{
			Return View::make('login_page')->with('message', 'Invalid user data provided.');
		}
	}

}