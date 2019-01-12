<h1>REGISTER NEW USER</h1>
<p style="color: red"><?=$_SESSION['error']??null;?></p>
<form method="POST">
    <div>
        <label>
            Username: <input type="text" name="username" required="required" value="" minlength="4" />
        </label>
    </div>
    <div>
        <label>
            Password: <input type="password" name="password" required="required" minlength="6" />
        </label>
    </div>
    <div>
        <label>
            Confirm Password: <input type="password" name="confirm_password" required="required" minlength="6" />
        </label>
    </div>
    <div>
        <label>
            Display Name: <input type="text" name="display_name" required="required" value="" minlength="5" />
        </label>
    </div>
    <div>
        <label>
            Born On: <input type="date" name="born_on" value="" required="required" min="1900-01-01" max="2018-12-31" />
        </label>
    </div>
    <div>
        <input type="submit" name="register" value="Register now!">
    </div>
</form>