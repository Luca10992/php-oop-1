<?php
require_once __DIR__ . "/models/production.php";

$titanic = new Production("Titanic", "Italiano", 8, new Info("Romantico", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"));
$fightClub = new Production("Fight Club", "Italiano", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"));
$zodiac = new Production("Zodiac", "Italiano", 9, new Info("Thriller", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"));
$harryPotter = new Production("Harry Potter", "Inglese", 8, new Info("Fantasia", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"));
$FastandFurious = new Production("Fast and Furious", "Inglese", 6, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"));

$productions = [
    $titanic,
    $fightClub,
    $zodiac,
    $harryPotter,
    $FastandFurious
]
?>