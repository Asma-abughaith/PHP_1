<?php session_start()?>
<?php include './class.php' ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>students rigestration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href="./assests/style.css">
    <style>
    #color {
        height: 8vh;
    }
    </style>
</head>

<body>
    <h1 class="text-center m-auto m-5">Students Rigestration</h1>
    <form method="POST" action="./store.php" class="w-50 m-auto" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>

        <div class="mb-3 ">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight">
        </div>

        <h4>Gender</h4>

        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="female">
            <label class="form-check-label" for="flexRadioDefault1">
                Female
            </label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                male
            </label>
        </div>




        <div class="mb-3">
            <lable for="email" class="form-label"> E-mail:</lable>
            <input type="email" id="email" placeholder="example@gmail.com" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <lable for="phone" class="form-label"> Phone:</lable>
            <input type="tel" id="phone" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <lable for="address" class="form-label"> address:</lable>
            <select id="address" name="address" class="form-control">
                <option value="">-- choose your current address--</option>
                <option value="Amman">Amman</option>
                <option value="Salt">Salt</option>
                <option value="Karak">Karak</option>
                <option value="Irbid">Irbid</option>
            </select>
        </div>

        <div class="mb-3">
            <lable for="color" class="form-label"> Choose Your favorite color:</lable>
            <input type="color" id="color" name="color" value="#ffff" class="form-control w-25">
        </div>

        <div class="mb-3">
            <lable for="cv" class="form-label"> attach your CV:</lable>
            <input type="file" id="cv" name="cv" value="cv" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>