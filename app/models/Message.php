<?php


class Message extends Eloquent{

	protected $table = 'messages';

	public function user(){
		return $this->belongsTo('User');
	}
}