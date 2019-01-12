<?php /** @var \App\Data\ItemDTO[] $data */ ?>

<h1>ALL ITEMS</h1>

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
        <th>Username</th>
        <th>Location</th>
        <th>Phone</th>
        <th>Details</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item) : ?>
        <tr>
            <td><?=$item->getTitle(); ?></td>
            <td><?=$item->getCategory()->getName(); ?></td>
            <td><?=number_format($item->getPrice(), 2, ".", ""); ?></td>
            <td><?=$item->getUser()->getUsername(); ?></td>
            <td><?=$item->getUser()->getLocation(); ?></td>
            <td><?=$item->getUser()->getPhone(); ?></td>
            <td><a href="view.php?id=<?=$item->getItemId(); ?>">Details</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>