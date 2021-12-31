<?php

function getDB(){
    /** "static" verhindert dass mehrere Instanzen von db aufgerufen werden,
     $db bleibt erhalten*/
    static $db;
    if ($db instanceof PDO){
        return $db;
    }
    require_once CONFIG_DIR.'/database.php';
    // $dsn mit sprintf zusammensetzen aus String und Variablen
    $dsn = sprintf("mysql:host=%s; dbname=%s;charset=%s",DB_HOST,DB_DATABASE,DB_CHARSET);

    $db = new PDO($dsn,DB_USER,DB_PASSWORD);
    return $db;
}

function printDBErrorMessage(){
    $info = getDB()->errorInfo();
    if (isset($info[2])){
        return $info[2];
    }
    return '';
}