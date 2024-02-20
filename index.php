<?php
require 'includes/data/hotels.php';

$data = $_GET;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <div class="header-top d-flex justify-content-between">
                <div class="title">
                    <h1>Hotels</h1>
                </div>
                <div class="form">
                    <form action="" method="get" class="d-flex align-items-center gap-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="parking" id="parking">
                            <label class="form-check-label" for="parking">Parking</label>
                        </div>
                        <button class="btn btn-primary">Filtra</button>
                    </form>
                </div>
            </div>
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
                            <?php if (empty($data) || $hotel['parking'] === true) : ?>
                                <td><?= $hotel['name'] ?></td>
                                <td><?= $hotel['description'] ?></td>
                                <td>
                                    <?php if($hotel['parking']) : ?>
                                        <span class="check">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    <?php else : ?>
                                        <span class="xmark">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                    <?php endif ?>
                                </td>
                                <td><?= $hotel['vote'] ?></td>
                                <td><?= $hotel['distance_to_center'] ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </section>
    </main>
</body>
</html>