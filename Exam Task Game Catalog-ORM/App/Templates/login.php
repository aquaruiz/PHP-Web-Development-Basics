<h1>LOGIN</h1>
<p><?=$_SESSION['success']??null;?></p>
<!--<p>--><?//=$_SESSION['error']??null;?><!--</p>-->
<form method="POST">
    <div>
        <label>
            Username: <input type="text" name="username" required="required" />
        </label>
    </div>
    <div>
        <label>
            Password: <input type="password" name="password" required="required" />
        </label>
    </div>
    <div>
        <input type="submit" name="login" value="Login now!">
    </div>
</form>
