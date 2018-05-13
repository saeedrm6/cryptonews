<?php
$input = $_GET["num1"];
$symb1 = $_GET["symb1"];
$symb2 = $_GET["symb2"];


if (($symb1 == 'USD' AND $symb2 =='IRR') OR ($symb1 == 'IRR' AND $symb2 =='USD')){
	if ($symb1 == 'USD' AND $symb2 =='IRR') {
		$response = $input * 6400 *10;
	}
	else if ($symb1 == 'IRR' AND $symb2 =='USD') {
		$response = $input / 64000;
	}
}

else if ($symb1 == 'IRR') {
	$json = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/"."USD"."-".$symb2))->ticker;
	$response = ($input / 64000)   * $json->price;
}

else if ($symb2 == 'IRR') {
	$json = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/".$symb1."-"."USD"))->ticker;
	$response = $input * $json->price * 6400 * 10;
}


else{
	$json = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/".$symb1."-".$symb2))->ticker;
	$response = $input * $json->price;
}

echo $response;