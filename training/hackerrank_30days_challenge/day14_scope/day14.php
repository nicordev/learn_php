<?php
class Difference{
    private $elements=array();
    public $maximumDifference;

// Write your code here
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function computeDifference()
    {
        $size = count($this->elements);
        $this->maximumDifference = 0;

        if ($size > 1) {
            for ($i = 0; $i < $size - 1; $i++) {
                for ($j = $i + 1; $j < $size; $j++) {
                    $currentDifference = abs($this->elements[$i] - $this->elements[$j]);
                    if ($currentDifference > $this->maximumDifference) {
                        $this->maximumDifference = $currentDifference;
                    }
                }
            }
        }

        return $this->maximumDifference;
    }

    public function computeDifferenceMinMax()
    {
        $this->maximumDifference = max($this->elements) - min($this->elements);

        return $this->maximumDifference;
    }

    public function computeDifferenceOneLoop()
    {
        $size = count($this->elements);
        $min = $max = $this->elements[0];

        for ($i = 0; $i < $size; $i++) {
            if ($this->elements[$i] < $min) {
                $min = $this->elements[$i];
            }
            if ($this->elements[$i] > $max) {
                $max = $this->elements[$i];
            }
        }

        $this->maximumDifference = $max - $min;

        return $this->maximumDifference;
    }

    public function sortAndComputeDifference()
    {
        sort($this->elements);

        $this->maximumDifference = end($this->elements) - $this->elements[0];

        return $this->maximumDifference;
    }

} //End of Difference class


$data = [
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    [8, 8, 8, 8, 8],
    [23, 5, 367, 23, 10, 647, 3439, 2467, 43434, 25, 637],
    [-10, 10, 0, 5, -5],
    [-252, -34, -747, -346]
];

foreach ($data as $datum) {
    $diff = new Difference($datum);
    $diff->computeDifference();
    echo "{$diff->computeDifference()} | {$diff->computeDifferenceMinMax()} | {$diff->computeDifferenceOneLoop()} | {$diff->sortAndComputeDifference()}\n";
}
