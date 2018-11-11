<?php /** @var \App\Data\BookDTO[] $data */ ?>

<h1>ALL BOOKS</h1>

<p><a href="add_book.php">Add new book</a> | <a href="my_books.php">My Profile</a> | <a href="logout.php">logout</a></p>

<table border="1">
    <thead>
        <tr>
            <td>Title</td>
            <td>Author</td>
            <td>Genre</td>
            <td>Added by User</td>
            <td>Details</td>
        </tr>
    </thead>

    <tbody>
        <?php  # list all books
        foreach ($data as $book): ?>
        <tr>
            <td><?= $book->getTitle() ?></td>
            <td><?= $book->getAuthor(); ?></td>
            <td><?= $book->getGenre()->getName(); ?></td>
            <td><?= $book->getUser()->getUsername(); ?></td>
            <td><a href="view.php?id=<?= $book->getId(); ?>">Details</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>