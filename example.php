<?php
    $apiKey = 'c127814a526e4799a79c8f5e8fb4cd82';
    $apiSecret = '8ad2bb4fe6274c4b8a7f8aa31dd04cf12a041da2a5d8ddb234e8f6ec8871d272';
    $apiUrl = 'https://api.changelly.com';

    $message = json_encode(
        array('jsonrpc' => '2.0', 'id' => 1, 'method' => 'getCurrencies', 'params' => array())
    );
    $sign = hash_hmac('sha512', $message, $apiSecret);
    $requestHeaders = [
        'api-key:' . $apiKey,
        'sign:' . $sign,
        'Content-type: application/json'
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);
    
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
