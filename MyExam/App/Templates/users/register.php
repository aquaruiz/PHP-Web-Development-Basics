<?php /** @var \App\Data\UserDTO|null $data */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<h1>REGISTER NEW USER</h1>

<form method="POST">
    <div>
        <label>
           Username: <input type="text" name="username" required="required" minlength="4" />
        </label>
    </div>
    <div>
        <label>
            Password: <input type="password" name="password" required="required" minlength="4" />
        </label>
    </div>
    <div>
        <label>
            Confirm Password: <input type="password" name="confirm_password" required="required" minlength="4" />
        </label>
    </div>
    <div>
        <label>
            Full Name: <input type="text" name="full_name" required="required" minlength="5" />
        </label>
    </div>
    <div>
        <label>
            Born On: <input type="date" name="born_on" required="required" />
        </label>
    </div>
    <div>
        <input type="submit" name="register" value="Register!">
    </div>
</form>
