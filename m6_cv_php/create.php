<?php 
session_start();

$info = json_decode(file_get_contents('./api_cv/info.json'));

$name = isset($_POST['name'])?$_POST['name']:null;
$major = isset($_POST['major'])?$_POST['major']:null;
$birth_date = isset($_POST['birth-date'])?$_POST['birth-date']:null;
$birth_place = isset($_POST['birth-place'])?$_POST['birth-place']:null;
$info_descripe = isset($_POST['descripe'])?$_POST['descripe']:null;
$college_name = isset($_POST['college'])?$_POST['college']:null;
$college_grad = isset($_POST['graduation-date'])?$_POST['graduation-date']:null;
$school_name = isset($_POST['high-school'])?$_POST['high-school']:null;
$school_grad = isset($_POST['high-date'])?$_POST['high-date']:null;
$work_1 = isset($_POST['work'])?$_POST['work']:null;
$work_date = isset($_POST['work-date'])?$_POST['work-date']:null;
$work_2 = isset($_POST['work_2'])?$_POST['work_2']:null;
$work_date_2 = isset($_POST['work-date_2'])?$_POST['work-date_2']:null;
$email = isset($_POST['email'])?$_POST['email']:null;
$phone = isset($_POST['phone'])?$_POST['phone']:null;
$linkedin = isset($_POST['linkedin'])?$_POST['linkedin']:null;
$Github = isset($_POST['Github'])?$_POST['Github']:null;



$info[] = (object) array(
    'id' => count($info)+1,
    'name' => $name,
    'major' => $major,
    'birth_date' => $birth_date,
    'birth_place' => $birth_place,
    'info_descripe' => $info_descripe,
    'college_name' => $college_name,
    'college_grad' => $college_grad,
    'school_name' => $school_name,
    'school_grad' => $school_grad,
    'work_1' => $work_1,
    'work_date' => $work_date,
    'work_2' => $work_2,
    'work_date_2' => $work_date_2,
    'email' => $email,
    'phone' => $phone,
    'linkedin' => $linkedin,
    'Github' => $Github
    
);
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

    <title>My CV</title>
</head>

<body>
    <header>
        <h1>My CV</h1>
        <nav id="cvNav">
            <ul>
                <li>
                    <a href="<?=$linkedin?>" target="_blank">Linkedin Account</a>
                </li>
                <li>
                    <a href="<?=$Github?>">Github Account</a>
                </li>
            </ul>
        </nav>

        <!-- Basic bio -->
        <section>
            <div id="imageContainer">
                <img src="./assets/images/my_photo.jpeg" alt="my personal photo" width="250" height="250">
                <!-- h2 was wrapped in span to change the block behavior -->
                <div id="BasicInfoWrapper">
                    <h2><?=$name?></h2>
                    <h2><?=$major?></h2>
                </div>
            </div>

            <p id="objectives"><?= $info_descripe?></p>

        </section>
    </header>
    <hr>
    <main>
        <!-- Bio -->
        <section>
            <h3>Bio<span id="bioSimiC">:</span></h3>
            <p><strong><?=$name?></p>
            <p><strong>DOB:</strong> <time datetime="2010-02-23"><?= $birth_date ?></time></p>
            <p><strong>Place of Birth:</strong><?= $birth_place ?></p>
        </section>
        <!-- Education -->
        <section>
            <h3>Education</h3>
            <ul>
                <li><time datetime="2009"><?=$college_grad?></time>: <?=$college_name?></li>
                <li><time datetime="2008"><?=$school_grad?></time>:<?=$school_name?></li>
            </ul>
        </section>
        <!-- Career -->
        <section>
            <h3>Working Experiece</h3>
            <ul>
                <li><time datetime="2009"><?=$work_date?></time>: <?=$work_1?>.</li>
                <li><time datetime="2015"><?=$work_date_2?></time>: <?=$work_2?>.</li>
            </ul>
        </section>
    </main>
    <footer>
        <!-- Contact Information -->
        <section>
            <address>
                <a href="mailto:example@gmail.com"><?=$email?></a>
                <a href="tel:+962837298293"><?=$phone?></a>
            </address>
        </section>
        
        <div>your id is :<?=count($info) ?> </div>

        <!-- Date of creation -->
        
        <section>
            <time datetime="2022-10-9"><?= date('Y M')?></time>
        </section>
    </footer>
</body>

</html>
<?php

$json_info = json_encode($info);
    
    file_put_contents('./api_cv/info.json', $json_info);
?>

