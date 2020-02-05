<?php

/**
 * Script to call with curl.
 * 
 * Execute `php 127.0.0.1:8000` from this file's folder to launch the server and execute `php curl.php` in another tab to start the php curl script.
 */

echo "Hello world!\n";

$headers = getallheaders();

print_r($headers);