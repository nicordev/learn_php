<?php

$directoryPath = __DIR__.'/demo/nested_directory';
$filePath = "$directoryPath/hello.zog";

// Create directory
$directoryAccess = 0777;
$createNestedDirectories = true;
mkdir($directoryPath, $directoryAccess, $createNestedDirectories);

// Create file with some content
file_put_contents($filePath, 'hello');

// Add more content
file_put_contents($filePath, " World!\n", FILE_APPEND);

// Read file
echo file_get_contents($filePath);

// Delete file
unlink($filePath);

// Delete nested_directory (demo directory will stay)
rmdir($directoryPath);