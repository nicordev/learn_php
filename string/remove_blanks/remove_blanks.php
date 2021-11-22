<?php

$string = "    hello  world! \napple\tpeach   banana\n   ";

echo preg_replace('/\s+/', '', $string);