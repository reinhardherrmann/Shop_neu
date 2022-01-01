<div class="card">

    <div class="card-header">
        <?php echo isset($product)? $product['prod_title']:'Titel des Produktes' ?>
    </div>
    <img src="http://placekitten.com/186/100" class="card-img-top" alt="...">
    <div class="card-body">
        <?php echo isset($product)? $product['prod_description']:'Titel des Produktes' ?>
        <hr>
        <?php echo isset($product)? 'Nettopreis: ' . $product['prod_price']/100 .' Euro':'Testpreis: 4.00 Euro' ?>
    </div>
    <div class="card-footer">
        <a href="" class="btn btn-primary btn-sm">Details</a>
        <!-- Link für Warenkorb setzen -->
        <a href="index.php/cart/add/<?=$product['prod_id'] ?>" class="btn btn-success btn-sm">in den Warenkorb</a>
    </div>
</div>