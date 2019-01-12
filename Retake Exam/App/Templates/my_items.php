<?php /** @var \App\Data\ItemDTO[] $data */ ?>

<h1>MY ITEMS</h1>

<p>
    <a href="addItem.php">Add new Item</a>|
    <a href="profile.php">My profile</a>|
    <a href="logout.php">Logout</a>
</p>
<table border="1">
    <thead>
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item->getTitle() ?></td>
                <td><?= $item->getCategory()->getName(); ?></td>
                <td><?=number_format($item->getPrice(),2, '.', ""); ?></td>
                <td><a href="editItem.php?id=<?= $item->getItemId(); ?>">Edit</a></td>
                <td><a href="deleteItem.php?id=<?= $item->getItemId(); ?>">Delete</a></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>