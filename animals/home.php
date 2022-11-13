<?php
require './header.php';
$animals = json_decode(file_get_contents('./api_data/courses.json'));

?>
<main class="container my-5">
    <h1 class="text-center">All Animals</h1>
    <hr class="w-100 mb-5">
    <div class="row">

        <?php foreach ($animals as $animal) : ?>

            <div class="htu-card-wrapper mb-5 col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card w-100">
                    <img src="<?= $animal->image_link ?>" class="card-img-top" alt="animal life" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $animal->name?>
                        </h5>
                        <p class="card-text">
                            <?= $animal->animal_type ?>
                        </p>
                        <p class="card-text">
                            <?= $animal->diet ?>
                        </p>
                        <a href="./animal_details.php?id=<?= $animal->id ?>" class="btn btn-primary mb-2">Check Animal</a>
                        <a href="./favorite.php?>" class="btn btn-success" >add to favorite</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</main>
<?php require './footer.php' ?>