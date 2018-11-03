<?php
spl_autoload_register();

$db = DBConnection::getConnection();
$products_obj = new Products($db);
$product_id = $_GET['product_id']??null; // from query string in browser address bar

include('header.php');

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 1) {
        echo "Successfully created product!<br><br>";
    } else {
        echo "Successfully updated product!<br><br>";
    }
}

if ($product_id) {
    $product = $products_obj->getOne($product_id);

    if ($product) {
        foreach ($product as $key => $value) {
            echo $key . ':' . $value . '<br/>';
        }
    } else {
        echo 'No product found!';
    }
} else {
    echo 'No product id';
}

include('footer.php');