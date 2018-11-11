<?php /** @var \App\Data\BookDTO[] $data */ ?>

<h1>All Books</h1>

<p><a href="add_book.php">Add new book</a> | <a href="profile.php">My Profile</a> | <a href="logout.php">logout</a></p>

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
        foreach ($data as $task): ?>
        <tr>
            <td><?= $task->getTitle() ?></td>
            <td><?= $task->getAuthor()->getUsername(); ?></td>
            <td><?= $task->getGenre()->getName(); ?></td>
            <td><a href="edit_book.php?id=<?= $task->getId(); ?>">edit task</a></td>
            <td><a href="delete_book.php?id=<?= $task->getId(); ?>">delete task</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>