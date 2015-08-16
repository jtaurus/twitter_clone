<?php

class FollowingSeeder extends Seeder{
	

	public function run(){
		Eloquent::unguard();
		Following::create(array('follower_user_id' => 1, 'target_user_id' => 2));
		Following::create(array('follower_user_id' => 1, 'target_user_id' => 3));
		Following::create(array('follower_user_id' => 1, 'target_user_id' => 4));
		Following::create(array('follower_user_id' => 2, 'target_user_id' => 1));
		Following::create(array('follower_user_id' => 2, 'target_user_id' => 3));
		Following::create(array('follower_user_id' => 2, 'target_user_id' => 4));
		Following::create(array('follower_user_id' => 3, 'target_user_id' => 2));
		Following::create(array('follower_user_id' => 3, 'target_user_id' => 5));
		Following::create(array('follower_user_id' => 3, 'target_user_id' => 4));
	}

}