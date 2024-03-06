<?php
require_once __DIR__ . "/models/production.php";
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/Serie.php";
require_once __DIR__ . "/models/info.php";

$titanic = new Movie("Titanic", "Italiano", 8, new Info("Romantico", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 2264743305, 194);
$fightClub = new Movie("Fight Club", "Italiano", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 100900000, 139);
$zodiac = new Movie("Zodiac", "Italiano", 9, new Info("Thriller", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 84000000, 157);
$harryPotter = new Movie("Harry Potter e la pietra filosofale", "Inglese", 8, new Info("Fantasia", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 974000000, 152);
$FastandFurious = new Movie("Fast and Furious", "Inglese", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 207300000, 106);
$DeathNote = new SerieTv("Death Note", "Giapponese", 9, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 1, 37);
$Halo = new SerieTv("Halo", "Inglese", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 2, 17);
$AttackonTitan = new SerieTv("L'Attacco dei Giganti", "Giapponese", 9, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 8, 94);

$productions = [
    $titanic,
    $fightClub,
    $zodiac,
    $harryPotter,
    $FastandFurious,
    $DeathNote,
    $Halo,
    $AttackonTitan,
]
?>