<?php

define("DEFAULT_URL", "http://127.0.0.1:8000");

$url = "http://127.0.0.1:8000";
$jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImtpZCI6IjAwMDEiLCJpc3MiOiJCYXNoIEpXVCBHZW5lcmF0b3IiLCJpYXQiOjE1Njk5Mzc1MjUsImV4cCI6MTYwMTQ3MzUyNX0.eyJjdXN0b21lciI6IkRFVjYiLCJ1c2VybmFtZSI6IkRFVjYiLCJyb2xlcyI6IiIsImlhdCI6IjE1Njk5Mzc1MjUiLCJleHAiOiIxNjAxNDczNTI1In0.svEut7H1A9B_Uxm-sF3feMUCIY35E_OdhV3ykjOCvMs';

echo "URL? ";
fscanf(STDIN, "%s", $url);

echo "Requested URL: $url\n";

$curlSession = curl_init();

curl_setopt($curlSession, CURLOPT_URL, $url);
curl_setopt($curlSession, CURLOPT_HTTPHEADER, ["Authorization: BEARER $jwt"]);
$infos = curl_getinfo($curlSession);

curl_exec($curlSession);

curl_close($curlSession);