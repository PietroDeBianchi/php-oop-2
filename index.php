<?php
// Connect database & models to index.php
require_once  __DIR__ . '/Models/Category.php';
require_once  __DIR__ . '/Models/Products.php';

$cat = new Category('Cat', 'fa-solid fa-cat');
$dog = new Category('Dog', 'fa-solid fa-dog');





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>Animal-One</title>
</head>
<body>
    <nav class="navbar bg-dark py-2" data-bs-theme="dark">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand me-1">Animal One</a>
            <i class="fa-solid fa-paw"></i>
        </div>
        <form class="d-flex" role="search">
            <button class="btn btn-primary" type="submit">UpGrade</button>
        </form>
    </div>
    </nav>

    <main class="container">
        <div class="d-flex justify-content-around">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>