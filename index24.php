<?php 
$main_array_file = file("./main.txt");
$other_array_file = file("./other.txt");

function get_array($arr, $mas)
{
	echo "START IS CREATED " . $mas . " ARRAY\n";
	$arr_new = [];
	$count = count($arr);
	for($i = 0; $i < $count; $i++)
	{
		$a = mb_strpos($arr[$i], " ");
		$id = mb_substr($arr[$i], 0, $a);
		$other = mb_substr($arr[$i], $a + 1);
		if(array_key_exists((int)$id, $arr_new))
		{		
			$str = $arr_new[(int)$id] . "<br>" . "<span style='background-color:black; color: white'>" . $id . "</span>" . $other;
			$arr_new[(int)$id] = $str;
		}else
		{
			$arr_new[(int)$id] = "<br>" . "<span style='background-color:black; color: white'>" . $id . "</span>" . $other;
		}
	}
	echo $mas . " ARRAY IS CREATED [" . "contains = " . $count . "]\n";
	return $arr_new;
}

$main_array = get_array($main_array_file, "MAIN");
$other_array = get_array($other_array_file, "OTHER");

$html = '';
foreach ($main_array as $key => $value) 
{
	if(array_key_exists((int)$key, $other_array))
	{
		if($key === 0) continue;

		$html .= "<h2>" . $key . "</h2>" . "<div style='background-color: yellow'>" . $value . "</div>" . "<div style='background-color: #a7dea7'>" . $other_array[$key] . "</div><hr>";
	}
}

$header_html = "
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>test</title>
</head>
<body>";
$footer_html = "</body></html>";

if(file_exists("./result.html"))
{
	echo "delete oid file!!!\n";
	if(unlink("./result.html"))
	{
		echo "file is deleted\n";
	}
}

file_put_contents("./result.html", $header_html . $html . $footer_html);
echo "ALL READY!!!!\n";
sleep(1);