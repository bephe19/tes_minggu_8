<?php
require 'vendor/autoload.php';

use Boox\Square;
use Boox\Triangle;
use Boox\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea();
