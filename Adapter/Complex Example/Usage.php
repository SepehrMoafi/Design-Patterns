<?php
$legacyCalculator = new KilometerDistanceCalculator();
$adapter = new KilometerToMileAdapter($legacyCalculator);

$distanceInMiles = $adapter->calculateDistance(100, 200);
echo "Distance in miles: " . $distanceInMiles . " miles";