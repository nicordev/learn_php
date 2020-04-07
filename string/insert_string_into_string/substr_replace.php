<?php

// Insert 'BOB' in the middle of 'zogzog'

$zog = 'zogzog';
$bob = 'BOB';

echo substr_replace($zog, $bob, 3, 0);