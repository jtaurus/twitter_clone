<?php

class Following extends Eloquent{

	protected $table = "followings";

	public function follower(){
		return $this->belongsTo('User', 'follower_user_id');
	}

	public function target(){
		return $this->belongsTo('User', 'target_user_id');
	}
}