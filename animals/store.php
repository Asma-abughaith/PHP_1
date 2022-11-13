<?php
session_start();

for ($i=0 ; $i <20 ; $i++){

    $courses = json_decode(file_get_contents('./api_data/courses.json'));

    $new_animal = json_decode(file_get_contents('https://zoo-animal-api.herokuapp.com/animals/rand'));
    
    $courses[] =(object) array( $new_animal);

    $json_courses = json_encode($courses);
   
    
    file_put_contents('./api_data/courses.json',$json_courses);
    var_dump($new_animal);
};


