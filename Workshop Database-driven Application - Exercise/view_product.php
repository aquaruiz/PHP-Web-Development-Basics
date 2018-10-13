<?php

spl_autoload_register();

$db = DBConnection::getConnection();

$products_obj = new Products($db);

$product_id = $_GET['product_id'] ?? null;

include('header.php');

if (isset($_GET['isUploaded'])) {
    if ($_GET['isUploaded'] == 1) {
        echo "<p style='color: green'>The image has been uploaded</p>";
    }
}

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 1) {
        echo "Successful create product!<br><br>";
    } else {
        echo "Successful update product!<br><br>";
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
    if ($product['image'] != null) {
        $imagePath = "/uploads/" . $product['image'];
        echo "<hr /><img  src='.$imagePath.' width='400px' height='200px'/><hr />";
    }
} else {
    echo 'No product id';
}

include('footer.php');

?>

<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    Upload a File:
    <input type="hidden" name="product_id" value="<?= $product_id ?>"/>
    <input type="file" accept="image/gif, image/jpeg, image/png" name="myfile" id="fileToUpload">
    <input type="submit" name="submit" value="Upload File Now">
</form>
