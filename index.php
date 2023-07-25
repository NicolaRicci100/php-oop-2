<?php
include_once __DIR__ . '/models/Product.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1 class="text-center my-3 text-secondary">Selezione di prodotti per animali</h1>
    </header>
    <section class="container d-flex flex-wrap justify-content-around">
        <?php foreach ($products as $product) : ?>
            <div class="card m-3 p-1 bg-secondary text-white">
                <img src="<?= $product->img ?>" class="card-img-top" alt="<?= $product->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->animal ?></p>
                    <p class="card-text fst-italic text-black"><?= $product->type ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>