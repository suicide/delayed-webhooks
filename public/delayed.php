<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // only handle POST
    http_response_code(404);
    die();
}

$webhook = $_GET['webhook'];
$key = $_GET['key'];
$delay = $_GET['delay'];
$debug = $_GET['debug'];

sleep($delay);

$endpoint = "https://maker.ifttt.com/trigger/${webhook}/with/key/${key}";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$endpoint);
curl_setopt($ch, CURLOPT_POST, 0);

$server_output = curl_exec ($ch);

curl_close ($ch);

if ($server_output !== true) {
    http_response_code(400);
}

if ($debug) {
    echo "webhook: $webhook";
    echo "key: $key";
    echo "delay: $delay";
}