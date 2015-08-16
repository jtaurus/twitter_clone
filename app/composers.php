<?php


View::composer('user_profile', function($view){
	// Find user reference:
	$userReference = $view->getData()["user"];
	$data["user"] = $userReference;
	// Find users messages:
	$userMessages = $userReference->messages()->get();
	$data["messages"] = $userMessages;
	// Find users recent followers:
	$userFollowers = $userReference->followers()->orderBy('id', 'DESC')->get()->take(5);
	foreach($userFollowers as $oneFollowing){
		$data["followers"][] = User::findOrFail($oneFollowing->follower_user_id);
	}
	// Find who user recently followed:
	$userFollows = $userReference->follows()->orderBy('id', 'DESC')->get()->take(5);
	foreach($userFollows as $oneFollowed){
		$data["follows"][] = User::findOrFail($oneFollowed->target_user_id);
	}
	// pass the data
	$view->with('data', $data);
});