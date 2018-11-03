<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$products_obj = new Products($db);

include 'header.php';
?>
<div>
    <?php
if(isset($_GET['mode']) && $_GET['mode'] == 3){
    echo "Successfully deleted product!<br><br>";
}
?>
</div>
<?php
echo '<a href="edit_product.php">Create new product</a>';

echo '<table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>cat</th>
                <th>Create date</th>
                <th colspan="3" style="text-align: center">Commands</th>

            </tr>
        </thead>';

foreach ($products_obj->getList() as $product){
    $date = ($product['create_date'] ? date('d.m.Y', strtotime($product['create_date'])) : 'n/a');
    $product_id = $product['product_id'];

    echo "<tr>
            <td>{$product_id}</td>
            <td>{$product['product_name']}</td>
            <td>{$product['cat_name']}</td>
            <td>{$date}</td>
            <td>
                <a href='view_product.php?product_id={$product_id}'>View</a>
            </td>               
            <td>
                <a href='edit_product.php?product_id={$product_id}'>Edit</a>
            </td>
            <td>
                <a href='delete_product.php?product_id={$product_id}'>Delete</a>
            </td> 
        </tr>";
}

echo '</table>';

include 'footer.php';