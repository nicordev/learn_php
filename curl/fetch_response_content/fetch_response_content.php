<?php

require __DIR__.'/CurlService.php';

$curlService = new CurlService();

$response = $curlService->sendRequest('https://jsonplaceholder.typicode.com/todos/1', [$curlService->makeBasicAuthorizationHeaderString('myUsername', 'myPassword')]);

// As an Array
$content = json_decode($response, true);

echo "Title is: {$content['title']}\n";

// As an object StdClass
$content = json_decode($response, false);

echo "Title is: {$content->title}\n";
