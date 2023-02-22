<?php
 class car {
    private int $wheelNumber;
    private float $currentSpeed;
    private string $color;
    private int $seatNumber;
    private string $energyType;
    private float $energyLevel;

     public function __construct(string $color, int $seatNumber,string $energyType)
     {
         $this->color = $color;
         $this->seatNumber = $seatNumber;
         $this->energyType = $energyType;
     }

     public function start() {

     }

     public function forward() : string
         {
             $this->currentSpeed = 15;

             return "Go !";
         }

         public function brake() : string
         {
             $sentence = "";
             while ($this->currentSpeed > 0) {
                 $this->currentSpeed--;
                 $sentence .= "Brake !!!";
             }
             $sentence .= "I'm stopped !";
             return $sentence;
         }
     public function getColor(): string
     {
         return $this->color;
     }
     public function setColor(string $color): void
     {
         $this->color = $color;
     }
     public function getWheelNumber(): int
     {
         return $this->wheelNumber;
     }
     public function setWheelNumber(string $wheelNumber): void
     {
         $this->wheelNumber = $wheelNumber;
     }

     public function getCurrentSpeed(): float
     {
         return $this->currentSpeed;
     }
     public function setCurrentSpeed(string $currentSpeed): void
     {
         $this->currentSpeed = $currentSpeed;
     }

     public function getSeatNumber(): int
     {
         return $this->seatNumber;
     }
     public function setSeatNumber(string $seatNumber): void
     {
         $this->seatNumber = $seatNumber;
     }

     public function getEnergyType(): string
     {
         return $this->energyType;
     }
     public function setEnergyType(string $energyType): void
     {
         $this->energyType = $energyType;
     }

     public function getEnergyLevel(): float
     {
         return $this->energyLevel;
     }
     public function setEnergyLevel(string $energyLevel): void
     {
         $this->energyLevel = $energyLevel;
     }

}