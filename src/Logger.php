<?php

namespace src;

trait Logger {
    public function log(string $message): void {
        echo "[LOG] $message\n";
    }
}
