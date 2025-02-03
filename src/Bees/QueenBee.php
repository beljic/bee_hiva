<?php
declare(strict_types=1);

namespace src\Bees;

use src\Logger;

class QueenBee extends Bee
{
    use Logger;
    
    public function __construct()
    {
        parent::__construct("Queen");
    }

    public function work(): void
    {
        $this->log("A Queen bee does not work.");
        echo "A Queen bee does not work.\n";
    }
}
