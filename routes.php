<?php
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,'index.php');
$route = substr($url,$indexPHPPosition);
$baseURL = substr($url,0,$indexPHPPosition);

$route = null;

if (false !== $indexPHPPosition){
    $route = substr($url, $indexPHPPosition);
    $route = str_replace('index.php', '$replace', $route);
}


$route = str_replace('index.php','',$route);
$userId = getCurrentUserId();
$anzCartItems = countProductsInCart($userId);

if (!$route){

    // Produkte aus Datenbank auslesen
    $products = getAllProducts();
    require __DIR__.'/templates/main.php';
    exit();
}

// Route zum Warenkorb abfragen
if (strpos($route,'/cart/add/' ) !== false){
    //hier die Produkt-ID aus der URL ziehen

    $routeParts = explode('/',$route);
    // prductId aus der Route als Int auslesen
    $productId = (int)$routeParts[3];
    // Funktion, um Produkt im Cart zu speichern
    addProductToCart($userId, $productId);

    //header("Location: " .$baseURL . "index.php");
    header("Location: " .$baseURL);
    exit();
}

if (strpos($route,'/cart' ) !== false){
    $cartItems = getCartItemsForUser($userId);
    require __DIR__ . '/templates/cartPage.php';
    exit();
}