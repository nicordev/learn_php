<?php

class DateFinder
{
    private const DATE_FORMAT = 'Y-m-d';

    public function dateExists(array $dates, \DateTimeInterface $dateToFind)
    {
        foreach ($dates as $date) {
            if ($date->format(self::DATE_FORMAT) === $dateToFind->format(self::DATE_FORMAT)) {
                return true;
            }
        }

        return false;
    }
}
