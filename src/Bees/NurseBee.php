<?php
declare(strict_types=1);

namespace src\Bees;

class NurseBee extends WorkerBee
{
    public function __construct()
    {
        parent::__construct("Nurse");
    }

    public function work(): void
    {
        echo $this->isAlive ? "Nurse is caring for the larvae.\n" : "Nurse cannot work because it is dead.\n";
    }
}
