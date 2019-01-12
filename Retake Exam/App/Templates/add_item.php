<?php /** @var \App\Data\EditDTO $data */ ?>
<?php /** @var \App\Data\CategoryDTO $genre */ ?>
<?php /** @var \App\Data\EditDTO $editDTO */ ?>

<h1>ADD ITEM</h1>
<p style="color: red"><?= $error ?? null; ?></p>
<p><a href="profile.php">My Profile</a></p>
<form method="post">
    <div>
        <label>
            Title: <input type="text" name="title"/>
        </label>
    </div>
    <div>
        <label>
            Price: <input type="number" step="any" name="price"/>
        </label>
    </div>
    <div>
        <label>Category:
            <select name="category_id" required="required">
                <option>Choose an option ....</option>
                <?php foreach ($data->getCategory() as $category) {
                    echo "<option value='{$category->getCategoryId()}'>{$category->getName()}</option>";
                } ?>

            </select>
        </label>
    </div>
    <div>
        <label>Description:
            <textarea name="description"></textarea>
        </label>
    </div>
    <div>
        <label>
            Image URL: <input type="text" name="image"/>
        </label>
    </div
    <div>
        <input type="submit" name="add" value="Add"/>
    </div>
</form>
