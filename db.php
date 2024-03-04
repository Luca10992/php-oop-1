<?php
require_once __DIR__ . "./models/production.php";

$titanic = new Production("Titanic", "Italiano", 8);
$fightClub = new Production("Fight Club", "Italiano", 7);
$zodiac = new Production("Zodiac", "Italiano", 9);
$harryPotter = new Production("Harry Potter", "Inglese", 8);
$FastandFurious = new Production("Fast and Furious", "Inglese", 6);

$productions = [
    $titanic,
    $fightClub,
    $zodiac,
    $harryPotter,
    $FastandFurious
]
?>