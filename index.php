<?php require 'hotel.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
</head>


<body data-bs-theme="dark">
<div class="text-center">
    <h1 class="p-5 title">Hotel</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col"><i class="star fa-solid fa-star"></i></th>
                <th scope="col">km to center</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) : ?>
                <tr>
                    <th scope="row"><?= $hotel['name'] ?></th>
                    <td><?= $hotel['description'] ?></td>
                    <td><?= $hotel['parking'] ? '<i class=" check fa-solid fa-circle-check"></i>' : '<i class="cross fa-solid fa-circle-xmark"></i>' ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</div>
</body>
</html>