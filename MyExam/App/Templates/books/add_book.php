<?php /** @var \App\Data\EditDTO $data */ ?>

<h1>ADD NEW BOOK</h1>

<p><a href="profile.php">My Profile</a></p>
<form method="post">
    <div>
        <label>
            Book Title: <input type="text" name="title" required="required" minlength="3" maxlength="50"/>
        </label>
    </div>
    <div>
        <label>
            Book Author: <input type="text" name="author" required="required" minlength="3" maxlength="50"/>
        </label>
    </div>
    <div>
        <label>
            Description: <textarea name="description" required="required" minlength="10" maxlength="10000"></textarea>
        </label>
    </div>
    <div>
        <label>
            Image URL:<input type="url" name="image_url" required="required"/>
        </label>
    </div>
    <div>
        <label>
            Genre: <select name="category_id" required="required">
                <option></option>
<!--                --><?php //foreach ($data->getCategories() as $category): ?>
<!--                    <option value="--><?//= $category->getId(); ?><!--">--><?//= $category->getName(); ?><!--</option>-->
<!--                --><?php //endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        <input type="submit" name="add" value="Add"/>
    </div>
</form>