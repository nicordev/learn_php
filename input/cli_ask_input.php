<?php

$someVariableHere = readline("Enter a string: ");

echo "$someVariableHere\n";

// more efficient:
echo "Enter a string: ";
fscanf(STDIN, "%s", $someVariableHere);

echo "$someVariableHere\n";