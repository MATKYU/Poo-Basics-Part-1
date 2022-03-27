<?php

class Car
{

    private int $currentSpeed = 0;

    private int $nbSeats;

    private int $nbWheels = 4;

    private string $energy;

    private int $energyLevel = 100;

    private string $color;


    //fonction D'appel
    public function __construct(string $color, string $energy, int $nbSeats)
    {
        $this->color = $color;
        $this->energy = $energy;
        $this->nbSeats = $nbSeats;
    }


    // Start / Avancer / Reculer

    public function start(): string
    {
        $this->start = 0;

        return "Let's Go !";
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

    // Get / Set
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getNbSeat(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function nbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = 'which ?';
    }

    public function getEnergyLevel(): int
    {
       return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    // Fonction Dump
    public function dump()
    {
        var_dump($this);
    }
}
