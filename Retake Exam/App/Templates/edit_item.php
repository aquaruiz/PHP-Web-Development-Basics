<?php /** @var \App\Data\EditDTO $data */ ?>
<h1>EDIT ITEM</h1>

<p><a href="profile.php">My Profile</a></p>
<form method="post">
    <input type="hidden" name="item_id" value="<?= $data->getItem()->getItemId(); ?>"/>
    <div>
        <label>
            Title: <input type="text" value="<?= $data->getItem()->getTitle(); ?>" name="title"/>
        </label>
    </div>
    <div>
        <label>
            Price: <input type="number" step="any" value="<?=number_format($data->getItem()->getPrice(), 2, ".", "");?>" name="price"/>
        </label>
    </div>
    <div>
        <label>Category:
            <select name="category_id">
                <option>Choose an option...</option>
                <?php foreach ($data->getCategory() as $category): ?>
                    <?php if ($data->getItem()->getCategory()->getCategoryId() === $category->getCategoryId()) : ?>
                        <option selected="selected"
                                value="<?= $category->getCategoryId(); ?>"><?= $category->getName(); ?></option>
                    <?php else: ?>
                        <option value="<?= $category->getCategoryId(); ?>"><?= $category->getName(); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        <label>Description:
            <textarea name="description"><?= $data->getItem()->getDescription(); ?></textarea>
        </label>
    </div>
    <div>
        <label>
            Image URL: <input type="text" value="<?= $data->getItem()->getImage(); ?>" name="image"/>
        </label>
    </div>
    <div>
        <img width="450" src="<?= $data->getItem()->getImage(); ?>" alt="Item photo"/>
    </div>
    <div>
        <input type="submit" name="edit" value="Save"/>
    </div>
</form>
