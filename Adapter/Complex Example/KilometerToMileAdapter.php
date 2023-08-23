<?php

class KilometerToMileAdapter implements DistanceCalculatorInterface {
    private KilometerDistanceCalculator $kilometerCalculator;

    public function __construct(KilometerDistanceCalculator $calculator) {
        $this->kilometerCalculator = $calculator;
    }

    public function calculateDistance($start, $end): float
    {
        //(1 km = 0.621371 miles)
        $kilometers = $this->kilometerCalculator->calculateDistance($start, $end);
        return $kilometers * 0.621371;
    }
}