<?php
session_start();
error_reporting(-1);
ini_set('display_errors','on');

// ein Konstante erzeugen, die sagt, wo das Configverzeichnis ist.
define('CONFIG_DIR',__DIR__.'/config');
// alle erforderlichen Funktionen laden
require __DIR__.'/includes.php';

/** "$conn = new PDO($dsn,$username,$password)"... wird durch "getDB()" ersetzt. Somit die Funktion nur aufgerufen und
 * entweder ein neues PDO erstellt oder das bereits Existierende erneut verwendet **/
getDB()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Produkte aus Datenbank auslesen
$products = getAllProducts();
// User-ID erstellen
$userId = getCurrentUserId();

// cookie mit User-ID setzen, begrenzt auf 2 tage
setcookie('userId', $userId, strtotime('+2 days'));
//var_dump($userId);

$anzCartItems = countProductsInCart($userId);

require __DIR__.'/templates/main.php';