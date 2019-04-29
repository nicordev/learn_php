<?php

require "Autoloader/Autoloader.php";

$autoloader = new \Autoloader\Autoloader([
    "App" => "src/"
]);
$autoloader->register();

$myObject = new \App\MyClass\MyClass();

?>

<h1>Autoloader</h1>

<?= $myObject->hello() ?>