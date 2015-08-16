<?php

class Following extends Eloquent{

	protected $table = "followings";

	public function follower(){
		$this->belongsTo('User', 'follower_user_id');
	}

	public function target(){
		$this->belongsTo('User', 'target_user_id');
	}
}