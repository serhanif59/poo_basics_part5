<?php

class Car extends Vehicle implements LightableInterface
{
    private string $energy = "";
    private int $levelEnergy = 20;

    public function __constructor(string $color, int $nbSeat, string $energy)
    {
        parent::__construct($color, $nbSeat);
        $this->energy = $energy;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }


    public function forward(): string
    {
        if ($this->getCurrentSpeed() >= 0 && $this->levelEnergy > 0) {
            if ($this->getCurrentSpeed() < 260) {
                $this->setCurrentSpeed($this->getCurrentSpeed() + 10);
                $this->levelEnergy -= 1;
            }
            return "Going Forward!";
        } else {
            if ($this->levelEnergy > 0)
                return "Brake for stopping before go!";
            else
                return "No Energy to Go!!";
        }
    }

    public function back(): string
    {
        if ($this->currentSpeed <= 0 && $this->levelEnergy > 0) {
            if ($this->getCurrentSpeed() < 70) {
                $this->setCurrentSpeed($this->getCurrentSpeed() - 10);
                $this->levelEnergy -= 1;
            }
            return "Going back!";
        } else {
            if ($this->levelEnergy > 0)
                return "Brake for stopping before go back!";
            else
                return "No Energy to Go!!";
        }
    }

    public function brake(): string
    {
        if ($this->getCurrentSpeed() != 0) {
            $this->setCurrentSpeed($this->getCurrentSpeed() + ($this->getCurrentSpeed() > 0 ?  -10 : 10));
            return "Braking!";
        } else
            return "you are stopped!";
    }



    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getLevelEnergy(): int
    {
        return $this->levelEnergy;
    }


    public function setLevelEnergy(int $levelEnergy): void
    {
        $this->levelEnergy = $levelEnergy;
    }
}
