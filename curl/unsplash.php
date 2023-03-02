<?php

$ch = curl_init();

$headers = [
    "Authorization: Client-ID YOUR_ACCESS_KEY"
];

$res_headers = []; 

$header_cb = function($ch, $header) use(&$res_headers) {
  $len = strlen($header); 

  $parts = explode(":", $header, 2);

  if(count($parts) < 2) {
    return $len;
  }
  $res_headers[$parts[0]] = trim($parts[1]); 

  return $len;
};

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers, 
    CURLOPT_HEADER => true,
    CURLOPT_HEADERFUNCTION => $header_cb
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

$content_len = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

curl_close($ch);

//echo $status_code, "\n";
//echo $content_type, "\n";
//echo $content_len, "\n";
//echo $response, "\n";

print_r($res_headers);
