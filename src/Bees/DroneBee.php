<?php

namespace src\Bees;

class DroneBee extends Bee {
    public function __construct() {
        parent::__construct("Drone");
    }

    public function work(): void {
        echo "Drone bees do not work; they exist to mate.\n";
    }
}
