<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$product = new Products($db);

$currentDir = getcwd();
$uploadDirectory = "/uploads/";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

$fileName = $_FILES['myfile']['name'];
$fileSize = $_FILES['myfile']['size'];
$fileTmpName  = $_FILES['myfile']['tmp_name'];
$fileType = $_FILES['myfile']['type'];

$file = explode('.',$fileName);
$fileExtension = strtolower(end($file));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {

    $productId = $_POST['product_id'];
    $product->uploadImage(basename($fileName), $productId);
    header('Location: view_product.php?product_id='.$productId."&isUploaded=1");

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}


?>