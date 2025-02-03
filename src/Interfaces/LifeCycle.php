<?php
declare(strict_types=1);

namespace src\Interfaces;

interface LifeCycle
{
    public function isAlive(): bool;
    public function die(): void;
}
