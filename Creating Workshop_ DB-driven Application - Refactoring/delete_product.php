<?php
spl_autoload_register();

$db = DBConnection::getConnection();
$product_obj = new Products($db);

if(isset($_GET['product_id'])){
    $productId = $_GET['product_id'];
}

if($_POST){
    $product_obj->deleteProduct($productId);

    header("Location: index.php?mode=3");
}
?>
<h2 style="color: indianred">ARE YOU SURE TO DELETE THIS PRODUCT?</h2>

<form method="post">
    <input type="hidden" name="product_id" value="<?=$productId?>" />
    <a href="index.php">No :(</a>
    <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <input type="submit" value="YES" />
</form>