<?php

class DateComparator
{
    public const IS_BEFORE = -1;
    public const IS_SAME = 0;
    public const IS_AFTER = 1;
    private const DATE_COMPARISON_FORMAT = 'Y-m-d';

    public static function compare2Dates(DateTimeInterface $date1, DateTimeInterface $date2)
    {
        return $date1->format(self::DATE_COMPARISON_FORMAT) <=> $date2->format(self::DATE_COMPARISON_FORMAT);
    }
}