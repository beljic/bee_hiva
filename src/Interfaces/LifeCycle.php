<?php

interface LifeCycle {
    public function isAlive(): bool;
    public function die(): void;
}
