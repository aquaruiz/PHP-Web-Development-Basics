<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$product = new Products($db);

if(isset($_GET['product_id'])){
    $productId = $_GET['product_id'];
}

if($_POST){
    $product->deleteProduct($productId);
    header("Location: index.php?mode=3");
}

?>

<h2 style="color: red">ARE YOU SURE YOU WANT TO DELETE THIS PRODUCT?</h2>

<form method="post">
    <input type="hidden" name="product_id" value="<?= $productId ?>"/>
    <a href="index.php">No</a>
    <input class="btn btn-default" type="submit" value="YES" />
</form>