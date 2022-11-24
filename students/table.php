<?php session_start()?>
<?php include './functions.php' ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>students rigestration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel='stylesheet' href="./assests/style.css">
</head>

<body>
    
    <table class="table table-hover">
    <h2 class="text-center m-5">students</h>
        <table class="table m-auto">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Gender</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">address</th>
                    <th scope="col">favorite color</th>
                    <th scope="col"> CV</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach (get_students() as $student) : ?>
                <tr>
                    <th scope="row"><?= $student['id'] ?></th>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['DOB'] ?></td>
                    <td><?= $student['weight'] ?></td>
                    <td><?= $student['gender'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['phone'] ?></td>
                    <td><?= $student['address'] ?></td>
                    <td><?= $student['color'] ?></td>
                    <td><?= $student['cv'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </table>
</body>

</html>