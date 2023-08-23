<?php

class KilometerDistanceCalculator
{
    public function calculateDistance($start, $end): float|int
    {
        return abs($end - $start);
    }
}