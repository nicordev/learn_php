<?php

function getCurrentWeekNumber()
{
    return (new DateTime())->format("W");
}

echo "Current week number: " . getCurrentWeekNumber() . "\n";
