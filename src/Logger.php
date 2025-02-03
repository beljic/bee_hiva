<?php
declare(strict_types=1);

namespace src;

trait Logger
{
    public function log(string $message): void
    {
        echo "[LOG] $message\n";
    }
}
