<?php
include 'hotels.php';

if (isset($_GET['parking'])) {
    $filteredHotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] == true;
    });
} else {
    $filteredHotels = $hotels;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>PHP | Hotels</title>

    <style>
        body {
            color: white;
        }

        .table {
            background-color: transparent;
        }

        .table th,
        .table td {
            background-color: transparent;
            color: white;
        }

        span {
            color: #7377AD;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>

</head>

<body class="bg-dark">

    <header class="shadow-lg">
        <h1 class="py-3 ps-3">Hotel<span>php</span>.com</h1>
        <form class="py-2 ps-3 d-flex align-items-center bg-info bg-opacity-25">
            <div class="form-check">
                <label class="form-check-label" for="parkingCheckbox">
                    Filtra per: parcheggio
                </label>
                <input class="form-check-input" type="checkbox" value="1" id="parkingCheckbox" name="parking">
            </div>
            <button type="submit" class="btn btn-primary ms-3">Applica filtro</button>
        </form>
    </header>


    <main class="container pt-4">

        <table class="table border-light">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to Center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filteredHotels as $hotel) : ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td class="ps-4">
                            <?php if ($hotel['parking']) : ?>
                                <i class="bi bi-check-circle-fill text-success ps-1"></i>
                            <?php else : ?>
                                <i class="bi bi-x-circle-fill text-danger ps-1"></i>
                            <?php endif; ?>
                        </td>
                        <td><?php echo $hotel['vote']; ?>/5</td>
                        <td><?php echo $hotel['distance_to_center']; ?> km</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer class="text-center bg-dark">

        <p>powered by <span>php</span></p>

    </footer>

</body>

</html>