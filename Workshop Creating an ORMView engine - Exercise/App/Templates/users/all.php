<?php /** @var \App\Data\UserDTO[] $data */ ?>
<h1>All Users</h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Birthday</th>
    </tr>
    <?php foreach ($data as $row): ?>
    <tr>
        <td><?=$row->getId()?></td>
        <td><?=$row->getUsername()?></td>
        <td><?=$row->getFirstName() . ' ' . $row->getLastName()?></td>
        <td><?=$row->getBornOn()?></td>
    </tr>
    <?php endforeach; ?>
</table>
<p>Go back to <a href="profile.php">your profile</a>.</p>