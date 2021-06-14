<?php

function doStuff()
{
    try {
        throw new RuntimeException("Hello World!\n");
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

doStuff();
