<?php


// die("khalti page");
$args = http_build_query(array(
  'token' => 'QUao9cqFzxPgvWJNi9aKac',
  'amount'  => 1000
));
$url = "https://khalti.com/api/v2/payment/verify/";

# Make the call using API.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$headers = ['Authorization: Key test_secret_key_737f9892c77d475898c88813288464e5'];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);



// Response
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

?>