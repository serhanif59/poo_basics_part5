<?php

abstract class HighWay
{
    private array $currentVehicles = [];
    private int $nbLane = 0;
    private int $maxSpeed = 0;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicles = array();
    }

    public abstract function addVehicle(Vehicle $vehicle): string|false;


    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    function addVehicle(Vehicle $vehicle): string
    {
        $error = "Vehicle added on this way";
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $currVeh = $this->getCurrentVehicles();
            if (empty($currVeh) || !in_array($vehicle, $currVeh)) {
                $currVeh[] = $vehicle;
                $this->setCurrentVehicles($currVeh);
            } else
                $error = "This vehicle yet on this way";
        } else
            $error = "This vehicle could'nt drive this way";
        return $error;
    }
}

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }
    function addVehicle(Vehicle $vehicle): string
    {
        $error = "Vehicle added on this way";
        if ($vehicle instanceof Bicycle || $vehicle instanceof SkateBoard) {
            $currVeh = $this->getCurrentVehicles();
            if (empty($currVeh) || !in_array($vehicle, $currVeh)) {
                $currVeh[] = $vehicle;
                $this->setCurrentVehicles($currVeh);
            } else
                $error = "This vehicle yet on this way";
        } else
            $error = "This vehicle could'nt drive this way";
        return $error;
    }
}

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    final function addVehicle(Vehicle $vehicle): string|false
    {
        $error = "Vehicle added on this way";
        $currVeh = $this->getCurrentVehicles();
        if (empty($currVeh) || !in_array($vehicle, $currVeh)) {
            $currVeh[] = $vehicle;
            $this->setCurrentVehicles($currVeh);
        } else
            $error = "This vehicle yet on this way";
        return $error;
    }
}
