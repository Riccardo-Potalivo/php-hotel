<?php
include 'Model/db.php';
include __DIR__ . '/partials/header.php';

if (isset($_GET['parking'])) {
    $parking_available = $_GET['parking'];

    $hotels = array_filter($hotels, fn($parking) => $parking_available === 'all' || $parking['parking'] == $parking_available);
}

?>

<main class="container py-5">
    <form class="mb-5" method="GET" action="index.php">
        <h4>Parking</h4>
        <select class="form-select form-select-sm" aria-label="Small select example" name="parking">
            <option selected value="all">All</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <table class="table">
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
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <td>
                        <?php echo $hotel['name'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['description'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['parking'] ?
                            '<i class="fa-solid fa-check text-success "></i>' :
                            '<i class="fa-solid fa-xmark text-danger "></i>'
                            ?>

                    </td>
                    <td>
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <?php echo $hotel['vote'] >= $i ?
                                '<i class="fa-solid fa-star"></i>' :
                                '<i class="fa-regular fa-star"></i>'
                                ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center'] ?> Km
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</main>

<?php include __DIR__ . '/partials/footer.php'; ?>