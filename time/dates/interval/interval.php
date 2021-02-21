<?php

function getIntervalBetween2Dates(DateTime $dateBegin, DateTime $dateEnd)
{
	return $dateEnd->diff($dateBegin);
}

function formatInterval(DateInterval $interval, string $format)
{
	return $interval->format($format);
}

function printInterval(DateInterval $interval)
{
    echo formatInterval($interval, "%y années %m mois %d jours %h heures %i minutes %s secondes");
}

$now = new DateTime();
$end = new DateTime('2021-02-25');

printInterval(getIntervalBetween2Dates($now, $end));