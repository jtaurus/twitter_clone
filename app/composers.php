<?php


View::composer('user_profile', function($view){
	$userReference = $view->getData()["userReference"];
	$data["user"] = $userReference;
	$view->with('data', $data);
});