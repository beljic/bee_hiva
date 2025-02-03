<?php

namespace src\Bees;

class ForagerBee extends WorkerBee {
    public function __construct() {
        parent::__construct("Forager");
    }

    public function work(): void {
        echo $this->isAlive ? "Forager is collecting nectar.\n" : "Forager cannot work because it is dead.\n";
    }
}
