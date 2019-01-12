<h1>Add new game</h1>
<p><?=$_SESSION['error']??null;?></p>
<div>
    <label>
        Title: <input type="text" value="" name="title" minlength="1" required="required"/>
    </label>
</div>
<div>
    <label>
        Publisher: <input type="text" value="" name="publisher" minlength="1" required="required" />
    </label>
</div>
<div>
    <label>
        Release Date: <input type="date" value="" name="release_date" required="required"/>
    </label>
</div>
<div>
    <label>Controller Schema:
        <select name="controller_schema" required="required">
            <option>Choose an option...</option>
        </select>
    </label>
</div>
<div>
    <input type="submit" name="save" value="Save" />
</div>
<a href="games.php">List</a>
<a href="index.php">Index</a>