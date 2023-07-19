<?php

include 'hotels.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Hotels</title>
</head>

<body>

    <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <li>
                <h3><?php echo $hotel['name']; ?></h3>
                <p><?php echo $hotel['description']; ?></p>
                <p>Parking: <?php echo $hotel['parking'] ? 'True' : 'False'; ?></p>
                <p>Vote: <?php echo $hotel['vote']; ?></p>
                <p>Distance to Center: <?php echo $hotel['distance_to_center']; ?> km</p>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>