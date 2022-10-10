<?php

require "Vehicle.php";

require "Car.php";
require "Bicycle.php";
require "SkateBoard.php";
require "Truck.php";

require "HighWay.php";



$greenSkate = new SkateBoard('green');
$redBike = new Bicycle('red');
$blueCar = new Car('blue', 5, 'benzine');
$grayTruck = new Truck('gray', 3, 20);

$motorWay1 = new MotorWay();
$residentialWay1 = new ResidentialWay();
$pedestrianWay1 = new PedestrianWay();


echo "Testing adding vehicule on motorWay1 : <br>";

$mess = $motorWay1->addVehicle($greenSkate);
echo "atempt to add greenSkate on motorWay1 : " . $mess . "<br>";

$mess = $motorWay1->addVehicle($redBike);
echo "atempt to add redBike on motorWay1 : " . $mess . "<br>";

$mess = $motorWay1->addVehicle($blueCar);
echo "atempt to add blueCar on motorWay1 : " . $mess . "<br>";

$mess = $motorWay1->addVehicle($blueCar);
echo "atempt to add blueCar on motorWay1 : " . $mess . "<br>";

$mess = $motorWay1->addVehicle($grayTruck);
echo "atempt to add grayTruck on motorWay1 : " . $mess . "<br>";

echo "<br><br>";
echo "Testing adding vehicule on residentialWay1 : <br>";

$mess = $residentialWay1->addVehicle($greenSkate);
echo "atempt to add greenSkate on residentialWay1 : " . $mess . "<br>";

$mess = $residentialWay1->addVehicle($redBike);
echo "atempt to add redBike on residentialWay1 : " . $mess . "<br>";

$mess = $residentialWay1->addVehicle($blueCar);
echo "atempt to add blueCar on residentialWay1 : " . $mess . "<br>";

$mess = $residentialWay1->addVehicle($blueCar);
echo "atempt to add blueCar on residentialWay1 : " . $mess . "<br>";

$mess = $residentialWay1->addVehicle($grayTruck);
echo "atempt to add grayTruck on residentialWay1 : " . $mess . "<br>";

echo "<br><br>";
echo "Testing adding vehicule on pedestrianWay1 : <br>";

$mess = $pedestrianWay1->addVehicle($greenSkate);
echo "atempt to add greenSkate on pedestrianWay1 : " . $mess . "<br>";

$mess = $pedestrianWay1->addVehicle($greenSkate);
echo "atempt to add greenSkate on pedestrianWay1 : " . $mess . "<br>";

$mess = $pedestrianWay1->addVehicle($redBike);
echo "atempt to add redBike on pedestrianWay1 : " . $mess . "<br>";

$mess = $pedestrianWay1->addVehicle($redBike);
echo "atempt to add redBike on pedestrianWay1 : " . $mess . "<br>";

$mess = $pedestrianWay1->addVehicle($blueCar);
echo "atempt to add blueCar on pedestrianWay1 : " . $mess . "<br>";

$mess = $pedestrianWay1->addVehicle($grayTruck);
echo "atempt to add grayTruck on pedestrianWay1 : " . $mess . "<br>";
