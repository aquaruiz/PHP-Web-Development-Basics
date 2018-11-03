<?php
spl_autoload_register();

$db = DBConnection::getConnection();
$products_obj = new Products($db);
$product_id = $_GET['product_id']??null; // from query string in browser address bar

include('header.php');

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 1) {
        echo "Successfully created product!<br><br>";
    } else if($_GET['mode'] == 2) {
        echo "Successfully updated product!<br><br>";
    }
}

if(isset($_GET['isUploaded']) && $_GET['isUploaded'] == 1){
    echo "File successfully uploaded!<br><br>";
}


if ($product_id) {
    $product = $products_obj->getOne($product_id);

    if ($product) {
        foreach ($product as $key => $value) {
            if ($key != "image"){
                echo $key . ':' . $value . '<br/>';
            } elseif ($key == 'image' && !is_null($value    )){
                echo "image:<br>";
                echo "<img src='./uploads/$value' height='100px' />";
            }
        }
    } else {
        echo 'No product found!';
    }
} else {
    echo 'No product id';
}

include('footer.php');

?>
<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    Upload a New File:
    <div>
        <input type="hidden" name="product_id" value="<?= $product_id ?>"/>
        <input type="file" accept="image/gif, image/jpeg, image/png" name="myfile" id="fileToUpload">
    </div>
    <div>
        <input type="submit" name="submit" value="Upload File Now">
    </div>
</form>