<?php
$input = $_GET["num1"];
$symb1 = $_GET["symb1"];
$symb2 = $_GET["symb2"];

$json = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/".$symb1."-".$symb2))->ticker;

$response = $input * $json->price;
echo $response;