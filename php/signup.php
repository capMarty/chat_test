<?php
session_start();

include_once __DIR__ . '/inc/functions.php';

include_once __DIR__ . '/connectDB.php';
include_once __DIR__ . '/validate/fieidsSignup.php';


// debug($fieldsSignup);

function validate($data)
{
	foreach ($data as $key => $value) {
		if($data[$key]['requied'] && empty($data[$key]['value'])) 
		{
			sendBadResponse("empty {$data[$key]['name']}", 200);
			return false;
		} elseif(!$data[$key]['validate']) 
		{
			sendBadResponse("not validate {$data[$key]['name']}", 200);
			return false;
		}
	}

	return true;
}

// if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
// 	$img_n = $_FILES['image']['name'];
// 	$img_t = $_FILES['image']['type'];
// 	$img_tn = $_FILES['image']['tmp_name'];

// 	$img_ex = explode('.', $img_n);
// 	$img_tyrp = end($img_ex);

// 	if(in_array($img_tyrp, ['png', 'jpeg', 'jpg']))
// 	{
// 		$time = time();

		
// 		$new_img_name = $time . $img_n;

// 		if(move_uploaded_file($img_tn, 'images/' . $new_img_name))
// 		{
// 			$status = 'Active now';
// 			$unique_id = uniqid();

// 		}
// 	}else {
// 		sendBadResponse("NOT FILE MIME-TYPE", 200);
// 	}

// } else
// {
// 	sendBadResponse("NOT FILE", 200);
// 	return;
// }


// debug($_FILES);
// phpinfo();
// exit;


$img_path = '/img.jpeg';
$status = 'Active now';
$unique_id = mt_rand();

if(!validate($fieldsSignup)) 
{
	return;
}

$stmt = $pdo->prepare('SELECT COUNT(email) FROM users WHERE email = ?');
$stmt->execute([$fieldsSignup['email']['value']]);
$var = $stmt->fetchColumn();
if($var)
{
	sendBadResponse("exists {$fieldsSignup['email']['value']}", 200);
	return;
}


$data = [
	'unique_id' => $unique_id,
	'fname'  => $fieldsSignup['first_name']['value'],
	'lname'  => $fieldsSignup['last_name']['value'],
	'email'  => $fieldsSignup['email']['value'],
	'passwd' => $fieldsSignup['password']['value'],
	'img'	 => $img_path,
	'status' => $status,
];
$stmt = $pdo->prepare('INSERT users(unique_id, fname, lname, email, passwd, img, status)
	VALUES(:unique_id, :fname, :lname, :email, :passwd, :img, :status)');	
if($stmt->execute($data))
{
	$_SESSION['unique_id'] = $unique_id;
	sendGoodResponse("created!!!!");
} else
{
	sendBadResponse("not created");
	return;
}