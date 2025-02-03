<?php
declare(strict_types=1);

namespace src;

use InvalidArgumentException;
use src\Bees\QueenBee;
use src\Bees\BuilderBee;
use src\Bees\WarriorBee;
use src\Bees\ForagerBee;
use src\Bees\NurseBee;
use src\Bees\DroneBee;

class Hive
{
    private array $bees = [];
    private ?QueenBee $queen = null;

    public function __construct()
    {
        $this->addQueen();
    }

    /**
     * @return void
     */
    private function addQueen(): void
    {
        if ($this->queen === null) {
            $this->queen = new QueenBee();
            $this->bees[] = $this->queen;
        } else {
            echo "A hive can only have one Queen.\n";
        }
    }

    /**
     * @param string $type
     * @return void
     */
    public function addBee(string $type): void
    {
        if ($type === "Queen") {
            echo "Cannot add another Queen to the hive.\n";
            return;
        }
        $this->bees[] = match ($type) {
            "Builder" => new BuilderBee(),
            "Warrior" => new WarriorBee(),
            "Forager" => new ForagerBee(),
            "Nurse" => new NurseBee(),
            "Drone" => new DroneBee(),
            default => throw new InvalidArgumentException("Invalid bee type: $type")
        };
    }

    /**
     * @return array
     */
    public function getBees(): array
    {
        return $this->bees;
    }
}
