<?php


class Truck extends Vehicle
{
    private int $stockCapacity;
    private int $currentLoad = 0;

    function __construct(string $color, int $nbSeats, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->stockCapacity = $stockCapacity;
    }

    public function getStateLoad(): string
    {
        if ($this->currentLoad < $this->stockCapacity)
            return "in filling";
        return "full";
    }


    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }


    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }


    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = min($currentLoad, $this->stockCapacity);
    }
}
