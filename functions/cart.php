<?php
function addProductToCart(int $userId, int $productId){
    //var_dump($productId);
    // SQL-Statement zum Einfügen eines Produktes erstellen
    //$sql = "INSERT INTO shop.tbl_cart (crt_user_id, crt_product_id) VALUES( $userId, $productId)";
    $sql = "INSERT INTO shop.tbl_cart SET crt_user_id = :userID, crt_product_id = :productId";
    $stmt = getDB()->prepare($sql);
    $stmt->execute(array(':userID' => $userId, ':productId' => $productId));
}

function countProductsInCart(int $userId){
    $list_sql_cart = "SELECT COUNT(crt_id) FROM shop.tbl_cart WHERE crt_user_id =".$userId;
    $cartResults = getDB()->query($list_sql_cart);
    // Fehler auffangen
    if ($cartResults === false) {
        var_dump(printDBErrorMessage());
        return 0;
        exit;
    }

    // da nur 1 Spalte gewählt reicht fetchColumn
    $anzCartItems = $cartResults->fetchColumn();
    return $anzCartItems;
}

function getCartItemsForUser(int  $userID){
    $sql = "SELECT prod_title,prod_description, prod_price, crt_amount
            FROM tbl_cart
            JOIN tbl_products ON (crt_product_id = tbl_products.prod_id)
            WHERE crt_user_id = :userID";
    $stmt = getDB()->prepare($sql);
    $stmt->execute(array('userID' => $userID));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($rows === false){
        return [];
    } else {
        return $rows;
    }
}