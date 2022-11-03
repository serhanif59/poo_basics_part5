<?php
class Bicycle extends Vehicle implements LightableInterface
{

    public function __construct(string $color)
    {
        parent::__construct($color, 1);
        $this->nbWheels = 2;
    }

    public function switchOn(): bool
    {
        return $this->getCurrentSpeed() > 10;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function forward(): string
    {
        $this->setCurrentSpeed(15);

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->getCurrentSpeed() > 0) {
            $this->setCurrentSpeed($this->getCurrentSpeed() - 1);
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
