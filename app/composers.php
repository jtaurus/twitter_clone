<?php


View::composer('user_profile', function($view){
	// Find user reference:
	$userReference = $view->getData()["user"];
	$data["user"] = $userReference;
	// Find users messages:
	$userMessages = $userReference->messages()->get();
	$data["messages"] = $userMessages;
	$view->with('data', $data);
});