<?php

include_once __DIR__ . '/validateFunctions.php';

$fieldsSignup = [

	'first_name' => [
		'name'     => 'First name',
		'requied'  => true,
		'validate' => validateString(trim($_POST['first_name'])),
		'value'	   => trim($_POST['first_name']),
	],

	'last_name' => [
		'name'     => 'Last name',
		'requied'  => true,
		'validate' => validateString(trim($_POST['last_name'])),
		'value'	   => trim($_POST['last_name']),
	],

	'email' => [
		'name'     => 'Email',
		'requied'  => true,
		'validate' => validateEmail(trim($_POST['email'])),
		'value'	   => trim($_POST['email']),

	],

	'password' => [
		'name'     => 'Password',
		'requied'  => true,
		'validate' => validateString($_POST['password']),
		'value'	   => $_POST['password'],

	],
];