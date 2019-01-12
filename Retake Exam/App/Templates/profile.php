<?php
    /** @var \App\Data\UserDTO $data */
?>
<h1>HELLO, <?=strtoupper($data->getFullName());?>!</h1>

<div>
    <a href="addItem.php">Add new Item</a>|
    <a href="logout.php">Logout</a>
</div>
<div>
    <p>
        <a href="myItems.php">My Items</a>
    </p>
    <p>
        <a href="allItems.php">All Items</a>
    </p>
</div>