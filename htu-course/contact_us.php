<?php
session_start();
include './includes/env.php';

// first solution
// $current_file_arr = explode('/', $_SERVER['SCRIPT_FILENAME']);
// $current_file_name = $current_file_arr[array_key_last($current_file_arr)];
// if ($current_file_name !== 'index.php'){}

if (!isset($_SESSION['user']) && !strpos($_SERVER['SCRIPT_FILENAME'], 'index.php'))
    header("Location: ./");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><?= TITLE ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if (isset($_SESSION['user'])) :
                        $menu_items = json_decode(file_get_contents('./api_data/menu.json'));
                    ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php foreach ($menu_items as $item) : ?>
                                <li class="nav-item">
                                    <a class="nav-link 
                                    <?= strpos($_SERVER['SCRIPT_FILENAME'], $item->script_name) ? "active" : null ?>" aria-current="page" href="./<?= $item->script_name ?>">
                                        <?= $item->title ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div>
                            <span class="me-3"><?= $_SESSION['user']['display_name'] ?></span>
                            <a href="./auth/logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
 <form style="height: 77vh;" >
  <div class="form-group w-50 m-auto mb-2 mt-5">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter The subject">
  </div>
  <div class="form-group w-50 m-auto mb-2">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter The subject">
  </div>
  <div class="form-group w-50 m-auto mb-2">
    <label >Message</label>
    <textarea name="msg" class="form-control" ></textarea>
  </div>
  <div class=" w-50 m-auto">
  <button type="submit" class="btn btn-primary m-auto">Submit</button>
  </div>
</form>

<?php require './footer.php' ?>
