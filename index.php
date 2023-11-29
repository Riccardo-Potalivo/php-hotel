<?php
include 'Model/db.php';
include __DIR__ . '/partials/header.php';

?>

<main class="container py-5">
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