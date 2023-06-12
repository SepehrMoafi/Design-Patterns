<?php

class PrinterAdapter implements PrinterInterface
{
    private $legacyPrinter;

    public function __construct(LegacyPrinter $legacyPrinter)
    {
        $this->legacyPrinter = $legacyPrinter;
    }

    public function printMessage($message)
    {
        $this->legacyPrinter->print($message);
    }
}