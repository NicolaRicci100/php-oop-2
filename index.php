<?php
include_once __DIR__ . '/models/product.php';
include_once __DIR__ . '/models/Animal.php';

$item_1 = new Product(1, 'Cani', 'Croccantini', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
$item_2 = new Product(2, 'Gatti', 'Scatoletta', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$item_3 = new Product(3, 'Pesci', 'Mangime', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');
$item_4 = new Product(4, 'Uccelli', 'Voliera', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');


$products = [$item_1, $item_2, $item_3, $item_4];
// var_dump($products);
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
    <!-- FontAwesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Axios -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script> -->
    <!-- Vue -->
    <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script defer src="js/script.js"></script> -->
</head>

<body>
    <header>
        <h1 class="text-center my-3 text-secondary">Selezione di prodotti per animali</h1>
    </header>
    <section class="container d-flex">
        <?php foreach ($products as $product) : ?>
            <div class="card m-3 p-1 bg-secondary text-white">
                <img src="<?= $product->img ?>" class="card-img-top" alt="<?= $product->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product->name ?></h5>
                    <p class="card-text"><?= $product->animals ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>