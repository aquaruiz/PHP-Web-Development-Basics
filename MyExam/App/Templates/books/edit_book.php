<?php /** @var \App\Data\EditDTO $data */ ?>
<h1>EDIT BOOK</h1>

<p><a href="my_books.php">My Profile</a></p>
<form method="POST">
    Book Title: <input value="<?= $data->getBook()->getTitle(); ?>" type="text" name="title" minlength="3"
                  maxlength="50" /><br/>
    Book Author: <input value="<?= $data->getBook()->getAuthor(); ?>" type="text" name="author" minlength="3"
                  maxlength="50"/><br/>

    Description:<textarea name="description"><?=$data->getBook()->getDescription(); ?></textarea><br/>
    Image URL: <input value="<?= $data->getBook()->getImage(); ?>" type="text" name="image" minlength="3" maxlength="50"/><br/>

    Genre: <select name="genre_id">
        <?php foreach ($data->getGenres() as $genre): ?>
            <?php if ($data->getBook()->getGenre()->getId() === $genre->getId()) : ?>
                <option selected="selected" value="<?= $genre->getId(); ?>"><?= $genre->getName(); ?></option>
            <?php else: ?>
                <option value="<?= $genre->getId(); ?>"><?= $genre->getName(); ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select><br/>
    <img border="2" src="<?=$data->getBook()->getImage();?>" alt="picture image"/> <br/>
    <input type="submit" name="edit" value="Edit"/><br/>
</form>

