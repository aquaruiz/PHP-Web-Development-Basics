<?php
/**
 * Created by PhpStorm.
 * User: Obache
 * Date: 04.11.2018
 * Time: 11:12
 */
echo '<a href="/Web Operations - Lab/products/edit">Create new product</a>';

echo '<table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>cat</th>
                <th>Create date</th>
                <th colspan="3">Commands</th>

            </tr>
        </thead>';

/** @var \Models\Products $model */
foreach ($this->model->getList()as $product){
    $date = ($product['create_date']?date('d.m.Y',strtotime($product['create_date'])):'n/a');
    $product_id = $product['product_id'];

    echo "<tr>
            <td>{$product_id}</td>
            <td>{$product['product_name']}</td>
            <td>{$product['cat_name']}</td>
            <td>{$date}</td>
            <td>
                <a href='products/view/{$product_id}'>View</a>
            </td>               
            <td>
                <a href='products/edit/{$product_id}'>Edit</a>
            </td>
        </tr>";
}
echo '</table>';