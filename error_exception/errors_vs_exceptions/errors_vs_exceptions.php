<?php

function brokenFunction(bool $throwException) {

    if ($throwException) {
        throw new RuntimeException('my exception');
    }

    throw new Error('my error');
}

function main(bool $throwException) {
    try {
        brokenFunction($throwException);
    } catch (Error $error) {
        echo "Error caught!\n";
    } catch (Exception $exception) {
        echo "Exception caught!\n";
    }
}

main(true);
main(false);