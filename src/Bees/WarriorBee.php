<?php

namespace src\Bees;

class WarriorBee extends WorkerBee
{
    public function __construct()
    {
        parent::__construct("Warrior");
    }

    public function work(): void
    {
        echo $this->isAlive ? "Warrior is defending the hive.\n" : "Warrior cannot work because it is dead.\n";
    }
}
