<?php 

$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api');

/* 
Curl with single call
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //return response as string

$res = curl_exec($ch);

curl_close($ch);

echo $res, "\n";
 */

//setting up multiple response options 
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://randomuser.me/api',
    CURLOPT_RETURNTRANSFER => true
]);

$res = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $res, "\n";
?>