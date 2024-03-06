<?php
require_once __DIR__ . "/models/production.php";
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/Serie.php";
require_once __DIR__ . "/models/info.php";

try {
    
    $titanic = new Movie("./assets/titanic.jpg", "Titanic", "Italiano", 8, new Info("Romantico", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 2.265000000, 194);
    $fightClub = new Movie("./assets/fightClub.jpg", "Fight Club", "Italiano", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 100.900000, 139);
    $zodiac = new Movie("./assets/zodiac.jpg", "Zodiac", "Italiano", 9, new Info("Thriller", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 84.000000, 157);
    $harryPotter = new Movie("./assets/harrypotter.jpg", "Harry Potter e la pietra filosofale", "Inglese", 8, new Info("Fantasia", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 974.000000, 152);
    $FastandFurious = new Movie("./assets/f&f.jpg", "Fast and Furious", "Inglese", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 207.300000, 106);
    $DeathNote = new SerieTv("./assets/deathnote.jpg", "Death Note", "Giapponese", 9, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 1, 37);
    $Halo = new SerieTv("./assets/halo.jpg", "Halo", "Inglese", 7, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 2, 17);
    $AttackonTitan = new SerieTv("./assets/aot.jpg", "L'Attacco dei Giganti", "Giapponese", 9, new Info("Azione", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nobis veritatis amet aperiam vel velit eum, voluptas ipsa laudantium molestias enim, iste voluptatibus doloribus corrupti minima sunt vero? Inventore, est?"), 8, 94);
    
    $productions = [
        $titanic,
        $fightClub,
        $zodiac,
        $harryPotter,
        $FastandFurious,
        $DeathNote,
        $Halo,
        $AttackonTitan
    ];
} catch (Exception $e) {
    $error = $e->getMessage();
    include "./errorPage.php";
    exit();
};