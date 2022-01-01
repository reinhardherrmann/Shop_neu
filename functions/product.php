<?php

function getAllProducts(){
    $list_sql = "SELECT prod_id, prod_title, prod_description, prod_price FROM shop.tbl_products";
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



