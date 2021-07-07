<?php

class DateHelper
{
    public function printWeek(DateTime $date) {
        echo "Week: {$date->format('W')}\n";
    }

    public function printWeeks(array $dates) {
        // Call class method
        array_map([$this, 'printWeek'], $dates);
    }

    public static function printWeekStatic(DateTime $date) {
        echo "Week: {$date->format('W')}\n";
    }
}

$dates = [
    new DateTime('2021-03-04'),
    new DateTime('2021-04-14'),
    new DateTime('2021-05-24'),
];
$dateHelper = new DateHelper();

$dateHelper->printWeeks($dates);

// Call class static method
array_map([DateHelper::class, 'printWeekStatic'], $dates);
