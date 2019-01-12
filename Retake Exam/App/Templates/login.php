<h1>LOGIN</h1>
<p style="color: red"><?=$errors[0]??null;?></p>
<?php /** @var \App\Data\UserDTO $data */?>
<?php
if(!empty($_SESSION['user'])){
    echo "<p style=\"color: green;\">Congrats, {$_SESSION['user']}! Login our platform!</p>";
}
$_SESSION['user'] = '';
?>
<form method="POST">
    <div>
        <label>
            Username: <input type="text" name="username" required="required" value="<?=$data ? $data->getUsername() : null?>" />
        </label>
    </div>
    <div>
        <label>
            Password: <input type="password" name="password" required="required" value="" />
        </label>
    </div>
    <div>
        <input type="submit" name="login" value="Login now!">
    </div>
</form>
