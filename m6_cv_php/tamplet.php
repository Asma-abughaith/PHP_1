<?php 
session_start();


$info = json_decode(file_get_contents('./api_cv/info.json'));


$search_term = !empty($_GET['search']) ? $_GET['search'] : null;
$final_cv = array();

foreach ($info as $value) {
    if (strpos($value->id, $search_term) !== false) {
        $final_cv[] = $value;
    }
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Indie+Flower&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="stylesheet" href='./assets/style.css'>

    <title>My CV</title>
</head>
<section>

</section>
<body>

    <header>
    <?php if (!empty($final_cv)) { ?>

    <?php foreach ($final_cv as $value) : ?>
        <h1>My CV</h1>
        <nav id="cvNav">
            <ul>
                <li>
                    <a href="<?=$value->linkedin?>" target="_blank">Linkedin Account</a>
                </li>
                <li>
                    <a href="<?=$value->Github?>">Github Account</a>
                </li>
            </ul>
        </nav>

        <!-- Basic bio -->
        <section>
            <div id="imageContainer">
                <img src="./assets/images/my_photo.jpeg" alt="my personal photo" width="250" height="250">
                <!-- h2 was wrapped in span to change the block behavior -->
                <div id="BasicInfoWrapper">
                    <h2><?=$value->name?></h2>
                    <h2><?=$value->major?></h2>
                </div>
            </div>

            <p id="objectives"><?= $value->info_descripe?></p>

        </section>
    </header>
    <hr>
    <main>
        <!-- Bio -->
        <section>
            <h3>Bio<span id="bioSimiC">:</span></h3>
            <p><strong><?=$value->name?></p>
            <p><strong>DOB:</strong> <time datetime="2010-02-23"><?= $value->birth_date ?></time></p>
            <p><strong>Place of Birth:</strong><?= $value->birth_place ?></p>
        </section>
        <!-- Education -->
        <section>
            <h3>Education</h3>
            <ul>
                <li><time datetime="2009"><?=$value->college_grad?></time>: <?=$value->college_name?></li>
                <li><time datetime="2008"><?=$value->school_grad?></time>:<?=$value->school_name?></li>
            </ul>
        </section>
        <!-- Career -->
        <section>
            <h3>Working Experiece</h3>
            <ul>
                <li><time datetime="2009"><?=$value->work_date?></time>: <?=$value->work_1?>.</li>
                <li><time datetime="2015"><?=$value->work_date_2?></time>: <?=$value->work_2?>.</li>
            </ul>
        </section>
    </main>
    <footer>
        <!-- Contact Information -->
        <section>
            <address>
                <a href="mailto:example@gmail.com"><?=$value->email?></a>
                <a href="tel:+962837298293"><?=$value->phone?></a>
            </address>
        </section>
        
        

        <!-- Date of creation -->
        <?php endforeach; ?>

    <?php } else {
    echo "<p class='test-center col-12'>Nothing was found!</p>";
    } ?>
        <section>
            <time datetime="2022-10-9"><?= date('Y M')?></time>
        </section>
    </footer>
</body>

</html>
