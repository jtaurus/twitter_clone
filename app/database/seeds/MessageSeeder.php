<?php

class MessageSeeder extends Seeder{
	
	public function run(){
		Eloquent::unguard();
		Message::create(array('message_body' => 'This is a sample message that is short and to the point.', 'user_id' => '1'));
		Message::create(array('message_body' => 'Sa takie dni w tygodniu.', 'user_id' => '1'));
		Message::create(array('message_body' => 'Still working on this special project', 'user_id' => '2'));
		Message::create(array('message_body' => 'Everything I build is amazing and exceeds my own expectations.', 'user_id' => '2'));
		Message::create(array('message_body' => 'Still working on this twitter clone application.', 'user_id' => '3'));
	}
}