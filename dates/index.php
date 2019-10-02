<?php

$date1 = new DateTime("2019-02-01 09:50:05");
var_dump($date1);

$interval1 = new DateInterval('P1D');
$date1->add($interval1);
var_dump($date1);

$interval2 = DateInterval::createFromDateString("5 days"); // Here it adds only 1 day... Why?
$date1->add($interval1);
var_dump($date1);