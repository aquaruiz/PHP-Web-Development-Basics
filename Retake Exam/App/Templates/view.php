<?php /** @var \App\Data\ItemDTO $data */?>

<h1>VIEW ITEM</h1>

<p>
    <a href="profile.php">My profile</a>|
</p>
<p><b>Title: </b><?=$data->getTitle();?></p>
<p><b>Price: </b><?=number_format($data->getPrice(), 2, ".", "");?></p>
<p><b>Category: </b><?=$data->getCategory()->getName();?></p>
<p><b>Phone: </b><?=$data->getUser()->getPhone();?></p>
<p><b>Description: </b><?=$data->getDescription();?></p>
<div>
    <img width="450" src="<?=$data->getImage();?>" alt="Item photo" />
</div>