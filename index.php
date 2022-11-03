<?php

require "Vehicle.php";
require "LightableInterface.php";

require "Car.php";
require "Bicycle.php";
require "SkateBoard.php";
require "Truck.php";

require "HighWay.php";


$blueCar = new Car("blue", 5);
$blackBicycle = new Bicycle("black");

echo "blue car switches on its lights : " . ($blueCar->switchOn() ? "lights OK" : "no lights!!!") . "<br>";

echo "black bicycle switches on its lights : " . ($blackBicycle->switchOn() ? "lights OK" : "minimum 10km/h for lights!!!") . "<br>";
echo "black bicycle get speed : " . $blackBicycle->forward() . " with " . $blackBicycle->getCurrentSpeed() . " km/h <br>";
echo "black bicycle switches on its lights : " . ($blackBicycle->switchOn() ? "lights OK" : "minimum 10km/h for lights!!! <br>");
