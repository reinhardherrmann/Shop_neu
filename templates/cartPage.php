<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reinhard Testshop</title>
    <base href="<?=$baseURL?>>">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicons/favicon/favicon-32x32.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- hier ggf bootstrapstyles überschreiben -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php include __DIR__.'/navbar.php'?>
<header class="jumbotron">
    <div class="container">
        <?=var_dump($baseURL)?>
        <h1 class="mt-3 mb-3">Warenkorb</h1>
    </div>
</header>
<section class="container" id="cartItems">
    <?php foreach ($cartItems as $cartItem): ?>
    <div class="row">
        <?php include __DIR__ . '/cartItem.php'?>
    </div>
    <?php endforeach; ?>
</section>



<!-- Skript für Bootstrap -->
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>