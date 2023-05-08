<?php
// Connect database & models to index.php
require_once  __DIR__ . '/Models/Category.php';
require_once  __DIR__ . '/Models/Products.php';
require_once  __DIR__ . '/Models/Food.php';
require_once  __DIR__ . '/Models/Game.php';

$cat = new Category('Cat', 'fa-solid fa-cat');
$dog = new Category('Dog', 'fa-solid fa-dog');

$collare = new Products('Kennel', 35, $dog);
$collare->description = 'The purr-fect accessory for your feline friend. Keep them stylish and safe with this cute collar that jingles!';
$collare->image = 'https://picsum.photos/seed/picsum/200';

$cuccia = new Products('Collar', 15, $cat);
$cuccia->description = 'The purr-fect accessory for your feline friend. Keep them stylish and safe with this cute collar that jingles!';
$cuccia->image = 'https://picsum.photos/seed/picsum/200';

$osso = new Food('Bone', 12, $dog, 125);
$osso->description = 'The perfect way to keep your pooch happy, healthy, and occupied. It is like a chew toy and snack in one';
$osso->image = 'https://picsum.photos/seed/picsum/200';

$palla = new Game('Ball', 9.99, $dog, 'Gomma');
$palla->description = 'The ultimate toy for any pup who loves to fetch, chew, or just go nuts! Bouncy, bright, and built to last!';
$palla->image = 'https://picsum.photos/seed/picsum/200';

$listItem = [
    $collare,
    $osso,
    $palla,
    $cuccia,
    $collare,
    $osso,
    $palla,
    $cuccia
];

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
    <nav class="navbar bg-dark fixed-top py-2" data-bs-theme="dark">
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

    <main class="container mt-5 py-4">
        <div class="d-flex justify-content-around flex-wrap">
            <?php foreach ($listItem as $item) { ?>
                <div class="card">
                    <img src="<?php echo $item->image; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->name; ?> <i class="<?php echo $item->category->icon; ?>"></i></h5>
                        <span><?php echo $item->price; ?> €</span>
                        <p><?php echo $item->description; ?></p>
                        <div>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

</body>

</html>