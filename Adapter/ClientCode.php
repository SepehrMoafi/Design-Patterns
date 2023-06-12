<?php
$legacyPrinter = new LegacyPrinter();
$adapter = new PrinterAdapter($legacyPrinter);
$adapter->printMessage("Hello, Adapter Pattern!");