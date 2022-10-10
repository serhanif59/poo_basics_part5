<?php
class Bicycle extends Vehicle
{

    public function __construct(string $color)
    {
        parent::__construct($color, 1);
        $this->nbWheels = 2;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
