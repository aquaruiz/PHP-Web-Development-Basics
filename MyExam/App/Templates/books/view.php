<?php /** @var \App\Data\EditDTO $data */ ?>

<h1>VIEW BOOK</h1>

<p><a href="profile.php">My Profile</a></p>
<div>
    <p><b>Book Title: </b><?= $data->getBook()->getTitle(); ?></p>
    <p><b>Book Author: </b><?= $data->getBook()->getTitle(); ?></p>
    <p><b>Description: </b><?= $data->getBook()->getTitle(); ?></p>
    <p><b>Genre: </b><?= $data->getBook()->getTitle(); ?></p>
    <p><img src="<?= $data->getBook()->getTitle(); ?>" alt="book image"/></p>
</div>