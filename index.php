<?php 
require 'hotel.php'; 

$parking_filter = array_filter($hotels);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'head.html'; ?>
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