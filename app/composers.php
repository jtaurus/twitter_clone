<?php


View::composer('user_profile', function($view){
	// Find user reference:
	$userReference = $view->getData()["user"];
	$data["user"] = $userReference;
	// Find users messages:
	$userMessages = $userReference->messages()->get();
	$data["messages"] = $userMessages;
	// Find user followers:
	$userFollowers = $userReference->followers()->get();
	$data["followers"] = $userFollowers;
	// Find who user follows:
	$userFollows = $userReference->follows()->get();
	$data["follows"] = $userFollows;
	// pass the data
	$view->with('data', $data);
});