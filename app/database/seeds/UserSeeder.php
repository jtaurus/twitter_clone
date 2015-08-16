<?php

class UserSeeder extends Seeder{

	public function run(){
		Eloquent::unguard();
		User::create(array('username' => 'firstUser', 'email' => 'firstuser@firstuser.org', 'password' => Hash::make('123')));
		User::create(array('username' => 'jonny', 'email' => 'jonny@firstuser.org', 'password' => Hash::make('123')));
		User::create(array('username' => 'mike', 'email' => 'mike@firstuser.org', 'password' => Hash::make('123')));
		User::create(array('username' => 'evil_hacker', 'email' => 'evil_hacker@firstuser.org', 'password' => Hash::make('123')));
		User::create(array('username' => 'a_woman', 'email' => 'a_woman@firstuser.org', 'password' => Hash::make('123')));
	}
}