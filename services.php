<?php
// config.php include කරන්න
include 'config.php';

// SMM Panel API request data
$data = [
    "key" => $api_key,
    "action" => "services"   // service list fetch කරන්න
];

// CURL request start
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// API response ලබා ගන්න
$response = curl_exec($ch);
curl_close($ch);

// JSON response decode කරන්න
$services = json_decode($response, true);

// screen එකේ print කරන්න
echo "<pre>";
print_r($services);
echo "</pre>";
?>
