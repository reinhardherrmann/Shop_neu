<?php
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,'index.php');
$route = substr($url,$indexPHPPosition);
$route = str_replace('index.php','',$route);
$userId = getCurrentUserId();

// Route zum Warenkorb abfragen
if (strpos($route,'/cart/add/' ) !== false){
    //hier die Produkt-ID aus der URL ziehen

    $routeParts = explode('/',$route);
    // prductId aus der Route als Int auslesen
    $productId = (int)$routeParts[3];
    // Funktion, um Produkt im Cart zu speichern
    addProductToCart($userId, $productId);
    $anzCartItems = countProductsInCart($userId);

    header("Location: /shop/index.php");
    exit();
}