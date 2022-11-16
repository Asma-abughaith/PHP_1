<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate Your CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href='./assets/style.css'>
</head>
  <body>
<nav id="cv-nav" class="navbar navbar-expand-lg bg-light ">
  <div class="container">
   
    <a class="navbar-brand" href="#">The key</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
    </ul>
      
    
    </div>
  </div>
</nav>
<section>
<h2 class="text-center mt-4 m-auto"> Built Your CV</h2>
<hr class="w-50 m-auto mb-5 style-four mt-2">
<form class='w-50 container' method="POST" action="./create.php">

  <div class="mb-3">
    <label for="name" class="form-label">Your Name:</label>
    <input type="text" class="form-control" id="name" name="name">
    
  </div>

  <div class="mb-3">
    <label for="major" class="form-label">Your Major:</label>
    <input type="text" class="form-control" id="major" name="major">
  </div>

  <div class="mb-3">
    <label for="birth-date" class="form-label">Your Birthday:</label>
    <input type="date" class="form-control" id="birth-date" name="birth-date">
  </div>

  <div class="mb-3">
    <label for="birth-place" class="form-label">Place of Birth:</label>
    <input type="text" class="form-control" id="birth-place" name="birth-place">
  </div>

  <div class="mb-3">
    <label for="descripe" class="form-label">Descript Your Self:</label>
    <textarea  type="text" class="form-control" id="descripe" name="descripe"></textarea>
  </div>

  <div class="mb-3">
    <label for="college-name" class="form-label">Your College</label>
    <input type="text" class="form-control" id="college-name" name="college">
  </div>

  <div class="mb-3">
    <label for="graduation-date" class="form-label">graduation Date From College:</label>
    <input type="date" class="form-control" id="graduation-date" name="graduation-date">
  </div>

  <div class="mb-3">
    <label for="high-school" class="form-label">Your High School:</label>
    <input type="text" class="form-control" id="high-school" name="high-school">
  </div>

  <div class="mb-3">
    <label for="high-date" class="form-label">graduation Date from High School:</label>
    <input type="date" class="form-control" id="high-date" name="high-date">
  </div>

  <div class="mb-3">
    <label for="work" class="form-label">Your work Experince:</label>
    <input type="text" class="form-control" id="work" name="work">
  </div>

  <div class="mb-3">
    <label for="work-date" class="form-label">date of Work Experience:</label>
    <input type="date" class="form-control" id="work-date" name="work-date">
  </div>

  <div class="mb-3">
    <label for="work_2" class="form-label">Your work Experince:</label>
    <input type="text" class="form-control" id="work_2" name="work_2">
  </div>

  <div class="mb-3">
    <label for="work-date_2" class="form-label">date of Work Experience:</label>
    <input type="date" class="form-control" id="work-date_2" name="work-date_2">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Your Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Your Phone Number:</label>
    <input type="tel" class="form-control" id="phone" name="phone">
  </div>

  <!-- <div class="mb-3">
    <label for="image" class="form-label">Your image:</label>
    <input type="image" class="form-control" id="image" name="image">
  </div> -->
  <div class="mb-3">
    <label for="linkedin" class="form-label">Your linkedin link:</label>
    <input type="text" class="form-control" id="linkedin" name="linkedin">
  </div>

  <div class="mb-3">
    <label for="Github" class="form-label">Your Github link:</label>
    <input type="text" class="form-control" id="Github" name="Github">
  </div>


  
  <button type="submit" class="btn btn-primary mb-4">Submit</a>
</form>
</section>





<footer  id ="cv-footer"class='d-flex justify-content-center align-items-center '>
  <div> &copy; <?= date('Y') ?> all right reservered </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>