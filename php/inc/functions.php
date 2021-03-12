<?php

function debug($data)
{
	echo "<pre>";
	print_r($data);
	"</pre>"; 
}

function sendBadResponse($msg, $code = 400)
{
    http_response_code($code);
    $response = [
        "status" => false,
        "msg"    => $msg,
    ];

    echo json_encode($response);
}

function sendGoodResponse($msg, $code = 200)
{
    http_response_code($code);
    $response = [
        "status" => true,
        "msg"    => $msg,
    ];

    echo json_encode($response);
}