<?php
$rectangle = new Rectangle();
$triangle = new Triangle();

$adapter = new RectangleAdapter($rectangle);
$triangleArea = $adapter->calculateAreaOfTriangle(10, 5);

echo "Triangle area: " . $triangleArea;