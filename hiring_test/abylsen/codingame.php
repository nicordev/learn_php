<?php
// do not modify change
class Change
{
    public $coin2 = 0;
    public $bill5 = 0;
    public $bill10 = 0;

    function __toString()
    {
        return "Change:\n{$this->coin2} coins of 2\n{$this->bill5} bills of 5\n{$this->bill10} bills of 10\n";
    }
}

// do not modify the signature of this​​​​​​‌​​​‌​​‌​‌‌​‌‌‌‌​​‌​​‌‌‌‌ function
function optimalChange($s)
{
    $change = new Change();
    $coins = [10, 5, 2];
    $coinCounts = [0, 0, 0];
    $coin2 = 2;
    $bill5 = 1;
    $bill10 = 0;
    $sum = $s;
    $continue = false;

    foreach ($coins as $coin) {
        if ($sum % $coin === 0) {
            $continue = true;
        }
    }

    if (!$continue) {
        return null;
    }

    for ($i = 0, $size = count($coins); $i < $size; $i++) {
        while ($sum % $coins[$i] < $sum) {
            $coinCounts[$i]++;
            $sum -= $coins[$i];
        }
    }

    $change->coin2 = $coinCounts[$coin2];
    $change->bill5 = $coinCounts[$bill5];
    $change->bill10 = $coinCounts[$bill10];

    return $change;
}

$data = [10, 5, 2, 1, 50];

foreach ($data as $datum) {
    echo optimalChange($datum);
}