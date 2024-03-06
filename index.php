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

    <div class="container text-center">
        <h1 class="text-primary fw-bold my-5">PHP OOP</h1>
        <table class="table">
            <thead>
                <th>Titolo</th>
                <th>Lingua</th>
                <th>Valutazione</th>
                <th>Genere</th>
                <th>Descrizione</th>
                <th>Profitti</th>
                <th>Durata</th>
                <th>Stagioni</th>
                <th>Episodi</th>
            </thead>
            <tbody>
                <?php foreach ($productions as $production): ?>
                <tr>
                    <td><?= $production->title ?></td>
                    <td><?= $production->language ?></td>
                    <td><?= $production->vote ?></td>
                    <td><?= $production->info->genre ?></td>
                    <td class="text-start"><?= $production->info->description ?></td>
                    <?php if ($production instanceof Movie): ?>
                    <td><?= $production->profit ?></td>
                    <td><?= $production->duration ?></td>
                    <td>/</td>
                    <td>/</td>
                    <?php elseif ($production instanceof SerieTv): ?>
                    <td>/</td>
                    <td>/</td>
                    <td><?= $production->season ?></td>
                    <td><?= $production->episode ?></td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>