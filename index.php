<?php
require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icon-bear.png">
    <title>PHP OOP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center text-primary fw-bold my-5">PHP OOP</h1>
        <div class="row">
            <?php foreach ($productions as $production): ?>
            <div class="col-3 mb-2">
                <div class="card" style="height: 800px">
                    <div style="height: 60%">
                        <img style="height: 100%" src="<?= $production->image ?>" class="card-img-top">
                    </div>
                    <div class="card-body" style="height: 40%">
                        <div class="row">
                            <div class="col-6 p-0">
                                <ul style="list-style-type: none" class="p-0">
                                    <li>
                                        <span class="fw-bold">Titolo:</span> <?= $production->title ?>
                                    </li>
                                    <li>
                                        <span class="fw-bold">Lingua:</span> <?= $production->language ?>
                                    </li>
                                    <li>
                                        <span class="fw-bold">Valutazione:</span> <?= $production->vote ?>
                                    </li>
                                    <li>
                                        <span class="fw-bold">Genere:</span> <?= $production->info->genre ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 p-0">
                                <ul style="list-style-type: none" class="p-0">
                                    <?php if ($production instanceof Movie): ?>
                                    <li>
                                        <span class="fw-bold">Profitti:</span> <?= $production->profit ?>
                                    </li>
                                    <li>
                                        <span class="fw-bold">Durata:</span> <?= $production->duration ?>
                                    </li>
                                    <li>
                                        <span class="fw-bold">Stagioni:</span> /
                                    </li>
                                    <li>
                                        <span class="fw-bold">Episodi:</span> /
                                    </li>
                                    <?php elseif ($production instanceof SerieTv): ?>
                                    <li>
                                        <span class="fw-bold">Profitti:</span> /
                                    </li>
                                    <li>
                                        <span class="fw-bold">Durata:</span> /
                                    </li>
                                    <li>
                                        <span class="fw-bold">Stagioni:</span> <?= $production->season ?>
                                    </li>
                                    <li>
                                        <span class="fw-bold">Episodi:</span> <?= $production->episode ?>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="col-12 p-0">
                                <ul style="list-style-type: none" class="p-0">
                                    <li>
                                        <span class="fw-bold">Descrizione:</span> <?= $production->info->description ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

</body>

</html>