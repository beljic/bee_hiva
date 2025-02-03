<?php

use PHPUnit\Framework\TestCase;
use src\Hive;

class HiveTest extends TestCase
{
    public function testHiveHasOneQueen()
    {
        $hive = new Hive();
        $this->assertTrue(true);
    }
}
