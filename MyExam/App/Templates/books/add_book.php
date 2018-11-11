<?php /** @var \App\Data\EditDTO $data */ ?>

<h1>ADD NEW BOOK</h1>

<p><a href="my_books.php">My Profile</a></p>
<form method="POST">
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
            Image URL:<input type="url" name="image" required="required"/>
        </label>
    </div>
    <div>
        <label>
            Genre: <select name="genre_id" required="required">
                <option></option>
                <?php foreach ($data->getGenres() as $genre): ?>
                    <option value="<?= $genre->getId(); ?>"><?= $genre->getName(); ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        <input type="submit" name="add" value="Add"/>
    </div>
</form>