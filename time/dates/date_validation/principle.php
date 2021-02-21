<?php

$dateFormat = 'Y-m-d';
$now = new DateTimeImmutable();
$limitInterval = new DateInterval('P2D');
$limitDate = $now->add($limitInterval);

echo "Today: {$now->format($dateFormat)}\n";
echo "Limit day: {$limitDate->format($dateFormat)}\n";