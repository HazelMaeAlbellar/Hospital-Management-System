<?php
$data = $_POST;
$error = [];
if(!isset($data['name']) || is_null($data['name']) || $data['name'] === ''){
	$error['name'] = 'Name is required';
}

if (count($error) >0 ) {
	return $error;
}

//con


return true;