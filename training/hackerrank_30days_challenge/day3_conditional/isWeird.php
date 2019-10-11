<?php


function echoIsWeird(int $n)
{
    if ($n % 2 === 1 || $n > 5 && $n < 21) {
        echo "Weird";
    } else {
        echo "Not Weird";
    }
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

echoIsWeird($N);

fclose($stdin);