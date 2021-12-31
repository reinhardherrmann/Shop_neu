<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reinhard Testshop</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicons/favicon/favicon-32x32.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- hier ggf bootstrapstyles überschreiben -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php include __DIR__.'/navbar.php'?>
<header class="jumbotron">
    <div class="container">
        <h1 class="mt-3 mb-3">Willkommen auf meinem online Shop Tutorial</h1>
    </div>
</header>
<section class="container" id="products">
    <div class="row">
        <?php foreach ($products as $product):?>
            <div class="col">
                <?php include 'templates/card.php' ?>
            </div>
        <?php endforeach;?>
    </div>

</section>



<!-- Skript für Bootstrap -->
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>