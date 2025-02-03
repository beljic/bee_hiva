<?php

namespace src\Bees;

use src\Interfaces\Workable;
use src\Logger;

abstract class Bee implements Workable {
    use Logger;

    public function __construct(
        protected string $role,
        protected bool $isAlive = true
    ) {}

    public function isAlive(): bool {
        return $this->isAlive;
    }

    public function die(): void {
        $this->log("Bee die.");
        $this->isAlive = false;
    }

    abstract public function work(): void;
}
