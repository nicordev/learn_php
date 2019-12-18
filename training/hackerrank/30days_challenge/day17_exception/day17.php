<?php

class Calculator
{
    public function power(int $n, int $p):int
    {
        if ($n < 0 || $p < 0) {
            throw new Exception("n and p should be non-negative");
        }

        return pow($n, $p);
    }
}
