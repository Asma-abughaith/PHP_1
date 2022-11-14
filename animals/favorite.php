<?php
include "./header.php";
$ani = json_decode(file_get_contents('./fav_store.json'));

?>
<main class="container my-5">
    <h1 class="text-center">All Animals</h1>
    <hr class="w-100 mb-5">
    <div class="row">

        <?php foreach ($ani as $a) : ?>

            <div class="htu-card-wrapper mb-5 col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card w-100">
                    <img src="<?= $a->image_link ?>" class="card-img-top" alt="animal life" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $a->name?>
                        </h5>
                        <p class="card-text">
                            <?= $a->animal_type ?>
                        </p>
                        <p class="card-text">
                            <?= $a->diet ?>
                        </p>
                        <a href="./animal_details.php?id=<?= $a->id ?>" class="btn btn-primary mb-2">Check Animal</a>
                        <a href="./favorite.php?id=<?= $a->id ?>" class="btn btn-success" >add to favorite</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

<?php $animal_id = !empty($_GET['id']) ? $_GET['id'] : null;

if (!empty($animal_id)) :


    $animals = json_decode(file_get_contents('./api_data/courses.json'));

    $animal = array_filter($animals, function ($item) use ($animal_id) {
       
        return $item->id == $animal_id;
        
    });
    $animal = $animal[array_key_first($animal)];

        $animals_fav = json_decode(file_get_contents('./fav_store.json'));
        $animals_fav[] = (object) array(
            'image_link' => $animal->image_link,
            'name' =>  $animal->name,
            'animal_type' => $animal->animal_type,
            'diet' => $animal->diet,
        );
        // convert the new array (courses) to JSON string.
        $json_courses = json_encode($animals_fav);
        // rewrite the courses.json file with the new courses array. 
        file_put_contents('./fav_store.json', $json_courses);
       
        
        

        ?>   
      
<?php
else :
?>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <p class="text-center">No Animal was found</p>
            </div>
        </div>
    </div>

<?php
endif;
include "./footer.php" ?>


