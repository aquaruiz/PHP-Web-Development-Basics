<h1>REGISTER NEW USER</h1>
<?php
/** @var \App\Data\ErrorDTO $error */
/** @var \App\Data\UserDTO $user*/

?>
<?php
/**
 * @var \App\Data\UserDTO $data
 */
?>
<p style="color: red"><?=$errors[0]??null;?></p>
<form method="POST">
    <div>
        <label>
            Username: <input type="text" name="username" required="required" value="<?=$data ? $data->getUsername() : null; ?>" minlength="4" />
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
            Full Name: <input type="text" name="full_name" required="required" value="<?php
            if($data){
                echo $data->getFullName();
            } else {echo "";}?>" minlength="5" />
        </label>
    </div>
    <div>
        <label>
            Location: <input type="text" name="location" value="<?php
            if($data){
                echo $data->getLocation();
            } else {echo "";}?>" required="required" minlength="4" />
        </label>
    </div>
    <div>
        <label>
            Phone: <input type="text" name="phone" value="<?php
            if($data){
                echo $data->getPhone();
            } else {echo "";}?>" required="required" minlength="6" />
        </label>
    </div>
    <div>
        <input type="submit" name="register" value="Register now!">
    </div>
</form>