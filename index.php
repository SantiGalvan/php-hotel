<?php
require 'includes/data/hotels.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container my-4">
            <h1>Hotels</h1>
            <div class="separator"></div>
        </div>
    </header>

    <main>

        <!-- Section Hotels -->
        <section id="hotels">
            <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) : ?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </section>
    </main>
</body>
</html>