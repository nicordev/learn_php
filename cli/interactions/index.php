<?php

require __DIR__ . "/Interrogator/Interrogator.php";

$interrogator = new Interrogator();

$question = "How old are you?";
$age = $interrogator->ask($question);

echo "You are $age\n";