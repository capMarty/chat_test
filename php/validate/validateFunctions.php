<?php

function validateString($str)
{
	if(strlen($str) === 0) return false;
	$str = filter_var($str, FILTER_SANITIZE_STRING);

	return (preg_match("/^[0-9a-zA-Z-'_ ]*$/", $str)) ? true : false; 
}

function validateEmail($email)
{
	return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
}
