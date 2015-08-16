<?php


class Message extends Eloquent{

	protected $table = 'messages';

	function user(){
		returh $this->belongsTo('User');
	}
}