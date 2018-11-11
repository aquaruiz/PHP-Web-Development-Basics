<?php /** @var \App\Data\EditDTO $data */ ?>

<h1>EDIT BOOK "<?= $data->getBook()->getTitle(); ?>"</h1>

<p><a href="profile.php">My Profile</a></p>
<form method="post">
    Book Title: <input value="<?= $data->getBook()->getTitle(); ?>" type="text" name="title" <!-- minlength="3"
                  maxlength="50" -->/><br/>
    Book Author: <input value="<?= $data->getBook()->getTitle(); ?>" type="text" name="author" <!-- minlength="3"
                  maxlength="50" -->/><br/>

    Description:<textarea>"<?= $data->getBook()->getDescription(); ?></textarea> <input value="<?= $data->getBook()->getDescription(); ?>" type="text" name="description" minlength="3"
                                                                                        maxlength="50"/><br/>
    Image URL:<input value="<?= $data->getBook()->getLocation(); ?>" type="text" name="image_url"/><br/>

    Genre: <select name="category_id">
        <?php foreach ($data->getGenres() as $category): ?>
            <?php if ($data->getBook()->getGenre()->getId() === $category->getId()) : ?>
                <option selected="selected" value="<?= $category->getId(); ?>"><?= $category->getName(); ?></option>
            <?php else: ?>
                <option value="<?= $category->getId(); ?>"><?= $category->getName(); ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select><br/>

    <input type="submit" name="edit" value="Edit"/><br/>
</form>

