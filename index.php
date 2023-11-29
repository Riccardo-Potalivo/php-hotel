<?php
include 'Model/db.php';
include __DIR__ . '/partials/header.php';

?>

<main class="container">
    <?php foreach ($hotels as $hotel) { ?>
        <div>
            <h2>
                <?php echo $hotel['name'] ?>
            </h2>
            <p>
                <?php echo $hotel['description'] ?>
            </p>
        </div>
    <?php } ?>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>