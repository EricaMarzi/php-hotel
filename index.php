<?php require 'hotel.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
<div class="container text-center">
    <h2>Hotels</h2>
    <?php foreach ($hotels as $hotel) : ?>
        <ul class="list-unstyled">
            <li><?= $hotel['name'] ?></li>
            <li><?= $hotel['description'] ?></li>
            <li><?= $hotel['parking'] ? 'Yes' : 'No' ?></li>
            <li><?= $hotel['vote'] ?></li>
            <li><?= $hotel['distance_to_center'] ?></li>
        </ul>
    <?php endforeach ?>
</div>
    
</body>
</html>