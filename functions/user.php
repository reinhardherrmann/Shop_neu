<?php

function getCurrentUserId(){
    // zufällige user-ID erstellen
    try {
        $userId = random_int(0, time());
    } catch (Exception $e) {
    }
    $anzCartItems=0;

    if (isset($_COOKIE['userId'])){
        $userId = (int)$_COOKIE['userId'];
    }
//TODO wenn Session verwendet werden soll, muss userID ersetzt werden, dazu separate Logik erforderlich
    if (isset($_SESSION['userId'])){
        $userId = (int)$_SESSION['userId'];
    }
    return $userId;
}




