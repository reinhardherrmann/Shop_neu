<?php

function getAllProducts(){
    $list_sql = "SELECT id, prod_titel, prod_beschreibung, prod_preis FROM shop.tbl_products";
    $param=[];
    $stmt = getDB()->prepare($list_sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($rows);
    if (!$rows){
        return [];
    } else{
        return $rows;
    }

}



