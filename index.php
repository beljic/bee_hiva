<?php

require __DIR__ . '/vendor/autoload.php';

use src\Hive;

$hive = new Hive();
$hive->addBee("Builder");
$hive->addBee("Warrior");
$hive->addBee("Forager");
$hive->addBee("Nurse");
$hive->addBee("Drone");

echo "Hive is operational.\n";

// Put all bees to work
foreach ($hive->getBees() as $bee) {
    $bee->work();
}

// Stop all bees from working
foreach ($hive->getBees() as $bee) {
    $bee->die();
}
