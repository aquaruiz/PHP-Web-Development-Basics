<?php /** @var \App\Data\UserDTO $data */ ?>
<h1>Your Profile</h1>

<form method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?=$data->getUsername()?>" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="text" name="password" required>
    </div>
    <div>
        <label for="confirm_password">Confirm password:</label>
        <input type="text" name="confirm_password" required>
    </div>
    <div>
        <label for="first_name">First name:</label>
        <input type="text" name="firstName" value="<?=$data->getFirstName()?>">
    </div>
    <div>
        <label for="last_name">Last name:</label>
        <input type="text" name="lastName" value="<?=$data->getLastName()?>">
    </div>
    <div>
        <label for="born_on">Birthday:</label>
        <input type="text" name="bornOn" value="<?=$data->getBornOn()?>">
    </div>
    <div>
        <input type="submit" name="edit" value="Edit profile">
    </div>
</form>
<p>You can <a href="logout.php">logout</a> or see <a href="all.php">all users</a>.</p>