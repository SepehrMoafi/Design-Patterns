<?php

class RectangleAdapter
{
    private Rectangle $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function calculateAreaOfTriangle($base, $height): float|int
    {
        $width = $base;
        $rectangularHeight = $height;

        return $this->rectangle->calculateArea($width, $rectangularHeight);
    }
}