<?php


View::composer('user_profile', function($view){
	$userReference = $view->getData()["user"];
	$data["user"] = $userReference;
	$view->with('data', $data);
});