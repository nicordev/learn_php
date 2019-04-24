<?php

require "autoload/autoload.php";

$myObject = new \App\MyClass();

?>

<h1>Autoloader</h1>

<?= $myObject->hello() ?>