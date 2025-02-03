<?php

namespace src\Bees;

class BuilderBee extends WorkerBee
{
    public function __construct()
    {
        parent::__construct("Builder");
    }

    public function work(): void {
        echo $this->isAlive ? "Builder is constructing the hive.\n" : "Builder cannot work because it is dead.\n";
    }
}
